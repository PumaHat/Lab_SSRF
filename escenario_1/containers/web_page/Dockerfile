FROM ubuntu:latest

ENV DEBIAN_FRONTEND noninteractive

# Configuración para poder incluir archivos al momento de usar webs online
RUN rm -rf /etc/php/8.1/apache2/php.ini
COPY ./php.ini /etc/php/8.1/apache2/
RUN chmod 644 /etc/php/8.1/apache2/php.ini

COPY ./start.sh /start.sh
RUN chmod +x /start.sh

# Para el SSRF internal port
COPY ./login.html /tmp/ 

RUN apt update && apt install -y apache2 \
php \
python3 \
lsof \
net-tools

CMD ["bash", "/start.sh"]
