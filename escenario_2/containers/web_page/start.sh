#!/bin/bash

# Iniciar servicios
service apache2 start # Puerto 80

ip_container=$(ifconfig)

echo "$ip_container"

cd /tmp/ 
pwd
python3 -m http.server 4646 --bind 127.0.0.1
# Mantener el contenedor en ejecución
tail -f /dev/null
