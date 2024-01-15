#!/bin/bash

# Iniciar servicios
ip_container=$(ifconfig)

echo "$ip_container"

# Mantener el contenedor en ejecución
tail -f /dev/null

