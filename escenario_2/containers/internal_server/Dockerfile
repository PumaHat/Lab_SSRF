FROM ubuntu:latest

ENV DEBIAN_FRONTEND noninteractive

COPY ./start.sh /start.sh
RUN chmod +x /start.sh

COPY ./login.html /tmp/ 

# Instalación de lo que se necesite en la máquina
RUN apt update && apt install -y python3 \
lsof \
net-tools

CMD ["bash", "/start.sh"]
