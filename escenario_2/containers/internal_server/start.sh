#!/bin/bash

ip_container=$(ifconfig)

echo "$ip_container"

cd /tmp/ 
pwd
python3 -m http.server 8989 
# Mantener el contenedor en ejecución
tail -f /dev/null

