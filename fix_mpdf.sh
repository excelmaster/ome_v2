#!/bin/bash

# Buscar y reemplazar las llaves problemáticas en mPDF
find /var/www/html/vendor/mpdf/mpdf -type f -name "*.php" -exec sed -i 's/{\([^}]\+\)}/[\1]/g' {} +