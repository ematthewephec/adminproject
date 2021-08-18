# Version Ubuntu

FROM ubuntu:20.04

#Installe les dépendances
RUN apt update && apt upgrade -y 
RUN apt install iputils-ping -y  
RUN apt install net-tools -y
RUN apt install dnsutils -y
RUN apt-get install wget -y
RUN apt install -y apt-utils \
  build-essential \
  wget \
  openssl \
  libxml2-dev \
  libncurses5-dev \
  uuid-dev \
  sqlite3 \
  libsqlite3-dev \
  pkg-config \
  libjansson-dev \
  libedit-dev \
  libssl-dev

#téléchargement et installation de la dernière version de astérix
WORKDIR /usr/src/asterisk
RUN cd /usr/src/asterisk
RUN wget http://downloads.asterisk.org/pub/telephony/asterisk/asterisk-16-current.tar.gz
RUN tar -xvzf asterisk-16-current.tar.gz
RUN cd asterisk-16.20.0 && ./configure --with-jansson-bundled && make && make install && make samples && make config

#Copie des fichiers
COPY config/sip.conf /etc/asterisk
COPY config/rtp.conf /etc/asterisk
COPY config/users.conf /etc/asterisk
COPY config/extensions.conf /etc/asterisk
COPY config/voicemail.conf /etc/asterisk
COPY config/features.conf /etc/asterisk
COPY config/queues.conf /etc/asterisk
COPY config/logger.conf /etc/asterisk

EXPOSE 5060/tcp
EXPOSE 5060/udp
EXPOSE 4569/udp
EXPOSE 4569/tcp
EXPOSE 19000-19090/udp


CMD ["asterisk","-f"]