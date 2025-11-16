#!/usr/bin/env python3
"""
Parser personalizado para facturas de Transgourmet
Usa pdfplumber para mejor extracción de texto y tablas
"""

import re
import sys
import json
from datetime import datetime

try:
    import pdfplumber
except ImportError:
    print("Error: Necesitas instalar pdfplumber:")
    print("pip install pdfplumber")
    sys.exit(1)

def parse_transgourmet_invoice(pdf_path):
    """Parsea una factura de Transgourmet desde PDF"""
    
    result = {
        'issuer': 'Transgourmet',
        'currency': 'EUR',
        'detail_lines': [],
        'resumen_lines': []
    }
    
    with pdfplumber.open(pdf_path) as pdf:
        # Concatenar texto de todas las páginas
        full_text = ""
        all_tables = []
        
        for page in pdf.pages:
            full_text += page.extract_text() + "\n"
            # Intentar extraer tablas
            tables = page.extract_tables()
            if tables:
                all_tables.extend(tables)
        
        # Extraer campos básicos con regex
        patterns = {
            'invoice_number': r'FACTURA\s+(\d{9})',
            'albaran': r'ALBARAN\s+(\d{9})',
            'date': r'(\d{2}-\d{2}-\d{4})',
            'amount': r'TOTAL\s+FACTURA\s+([0-9.,]+)',
            'nif': r'NIF/CIF\s+(\d+[A-Z])',
            'telefono': r'Telf:\s+(\d+)',
            'promociones': r'Aplicación\s+de\s+Promociones\s+([0-9.,]+)',
        }
        
        for field, pattern in patterns.items():
            match = re.search(pattern, full_text)
            if match:
                result[field] = match.group(1)
        
        # Convertir fecha
        if 'date' in result:
            try:
                date_obj = datetime.strptime(result['date'], '%d-%m-%Y')
                result['date'] = date_obj.strftime('%Y-%m-%d')
            except:
                pass
        
        # Extraer líneas de detalle de las tablas
        if all_tables:
            for table in all_tables:
                for row in table:
                    if not row or len(row) < 3:
                        continue
                    
                    # Buscar filas que empiecen con código de 8 dígitos
                    if row[0] and re.match(r'^\d{8}$', str(row[0]).strip()):
                        detail = {
                            'codigo': str(row[0]).strip(),
                            'description': str(row[1]).strip() if len(row) > 1 and row[1] else '',
                            'iva': str(row[2]).strip() if len(row) > 2 and row[2] else '',
                        }
                        
                        # Añadir más columnas si existen
                        if len(row) > 3 and row[3]:
                            detail['precio_sin_iva'] = str(row[3]).strip()
                        if len(row) > 4 and row[4]:
                            detail['cantidad_tipo'] = str(row[4]).strip()
                        if len(row) > 5 and row[5]:
                            detail['precio_unitario'] = str(row[5]).strip()
                        if len(row) > 6 and row[6]:
                            detail['unidades'] = str(row[6]).strip()
                        if len(row) > 7 and row[7]:
                            detail['precio_con_iva'] = str(row[7]).strip()
                        
                        result['detail_lines'].append(detail)
        
        # Si no hay tablas, intentar parsing de texto
        if not result['detail_lines']:
            lines = full_text.split('\n')
            for i, line in enumerate(lines):
                # Buscar líneas con código de producto
                match = re.match(r'^(\d{8})\s+(.+)', line)
                if match:
                    codigo = match.group(1)
                    description = match.group(2).strip()
                    
                    # Buscar valores en las siguientes líneas
                    detail = {
                        'codigo': codigo,
                        'description': description
                    }
                    
                    # Buscar IVA en próximas líneas
                    for j in range(i + 1, min(i + 20, len(lines))):
                        if re.search(r'\d+,\d+%', lines[j]):
                            detail['iva'] = lines[j].strip()
                            break
                    
                    result['detail_lines'].append(detail)
        
        # Extraer resumen de IVA
        iva_pattern = r'([0-9.,]+)\s+([0-9.,]+)\s+([0-9.,]+)\s+[0-9.,]+\s+[0-9.,]+\s+[0-9.,]+'
        for match in re.finditer(iva_pattern, full_text):
            result['resumen_lines'].append({
                'base_imponible': match.group(1),
                'percent_iva': match.group(2),
                'cuota_iva': match.group(3)
            })
    
    return result


if __name__ == '__main__':
    if len(sys.argv) < 2:
        print("Uso: python transgourmet_parser.py <archivo.pdf>")
        sys.exit(1)
    
    result = parse_transgourmet_invoice(sys.argv[1])
    print(json.dumps(result, indent=2, ensure_ascii=False))