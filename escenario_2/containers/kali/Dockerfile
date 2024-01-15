FROM kalilinux/kali-rolling

COPY ./start.sh /start.sh
RUN chmod +x /start.sh

RUN apt update && apt install -y net-tools \
nmap \
curl \
wget

CMD ["bash", "/start.sh"]
