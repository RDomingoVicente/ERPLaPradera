from flask import Flask, request, jsonify
from flask_cors import CORS
from invoice2data import extract_data
from invoice2data.extract.loader import read_templates
import os

app = Flask(__name__)
CORS(app)

UPLOAD_FOLDER = 'uploads'
if not os.path.exists(UPLOAD_FOLDER):
    os.makedirs(UPLOAD_FOLDER)

@app.route('/health', methods=['GET'])
def health_check():
    return jsonify({'status': 'ok'}), 200

@app.route('/api/extract', methods=['POST'])
def parse_invoice():
    try:
        # Verificar que se envió un archivo
        if 'file' not in request.files:
            return jsonify({'error': 'No se envió ningún archivo'}), 400
        
        file = request.files['file']
        provider = request.form.get('provider', '')
        
        if file.filename == '':
            return jsonify({'error': 'Nombre de archivo vacío'}), 400
        
        if not provider:
            return jsonify({'error': 'No se especificó el proveedor'}), 400
        
        # Guardar el archivo temporalmente
        file_path = os.path.join(UPLOAD_FOLDER, file.filename)
        file.save(file_path)
        
        # Parsear la factura con invoice2data
        # Especificar el template basado en el proveedor
        template_folder = f'../MisTemplates/{provider}'
        print(f" path plantilla: {template_folder}")
        
        # Verificar si existe la carpeta del template
        if os.path.exists(template_folder):
            # print(f" file_path:  {file_path}")
            # Cargar templates de invoice2data
            templates = read_templates(folder=template_folder)
            result = extract_data(file_path, templates=templates)
            # print(f"B")
        else:
            # Si no existe template específico, intentar con templates por defecto
            result = extract_data(file_path)
        
        # Eliminar el archivo temporal
        if os.path.exists(file_path):
            os.remove(file_path)
        
        if result:
            items_detail = result.get('detail_lines', [])
            resumen_detail = result.get('resumen_lines', [])
            return jsonify({
                "success": True,
                "data": {
                    "cliente": result.get('cliente',''),
                    "Moneda": result.get('currency',''),
                    "Proveedor": result.get('issuer', ''),
                    "n_factura": result.get('invoice_number', ''),
                    "fecha": result.get('date', ''),
                    "total_factura": result.get('amount', 0),
                    "Dirección": result.get('direcc',''),
                    "NIF": result.get('nif',''),
                    "lineas_articulo": items_detail,
                    "resumen_factura": resumen_detail
                }
            }), 200
        else:
            return jsonify({
                'success': False,
                'error': 'No se pudo parsear la factura. Verifica que existe el template para el proveedor especificado.'
            }), 400
            
    except Exception as e:
        # Asegurar que se elimine el archivo temporal en caso de error
        if 'file_path' in locals() and os.path.exists(file_path):
            os.remove(file_path)
        return jsonify({
            'success': False,
            'error': str(e)
        }), 500

if __name__ == '__main__':
    # host='0.0.0.0' permite conexiones desde otros contenedores Docker
    app.run(debug=True, host='0.0.0.0', port=5500)
