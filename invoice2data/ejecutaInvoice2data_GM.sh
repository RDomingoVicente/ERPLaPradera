invoice2data  --debug --template-folder ./MisTemplates/GM --exclude-built-in-templates --input-reader pdftotext  --output-format json \
--output-name ./MisOutput/GM/FAC_088049872.json ./MisFacturas/FAC_088049872.pdf


#invoice2data --input-reader pdfplumber --debug --template-folder ./MisTemplates/GM  --exclude-built-in-templates ./MisFacturas/FAC_088049872.pdf --output-format json \
#--output-name ./MisOutput/GM