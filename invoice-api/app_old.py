from flask import Flask, request, jsonify
from invoice2data import extract_data
from invoice2data.extract.loader import read_templates
import os

app = Flask(__name__)

# Define la ruta a tu carpeta de plantillas
custom_template_path = '../MisTemplates'

#este es un comentario para sincronizar con githup
# Cargar templates de invoice2data
templates = read_templates(folder=custom_template_path)

@app.route('/health', methods=['GET'])
def health():
    return jsonify({"status": "ok"}), 200

@app.route('/api/extract', methods=['POST'])
def extract_invoice():
    # Verificar que hay un archivo
    if 'file' not in request.files:
        return jsonify({"error": "No file provided"}), 400
    
    file = request.files['file']
    
    if file.filename == '':
        return jsonify({"error": "Empty filename"}), 400
    
    # Guardar temporalmente el PDF
    temp_path = f"/tmp/{file.filename}"
    file.save(temp_path)
    
    try:
        # Extraer datos del PDF
        result = extract_data(temp_path, templates=templates)
        
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
                "success": False,
                "error": "Could not extract data"
            }), 400
            
    except Exception as e:
        return jsonify({
            "success": False,
            "error": str(e)
        }), 500
    finally:
        # Limpiar archivo temporal
        if os.path.exists(temp_path):
            os.remove(temp_path)

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)