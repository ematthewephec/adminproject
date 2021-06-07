#Notre image seras issus d'un image ubuntu
FROM ubuntu:bionic

# verification de MAJ,installation de MAj,installions d'outil basique de rÃ©seau sur notre image
RUN apt update && apt upgrade -y 
RUN apt install iputils-ping -y  
RUN apt install net-tools -y
RUN apt install dnsutils -y
RUN apt-get install wget -y

#installation des dÃ©pendances
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
RUN cd asterisk-16.18.0 && ./configure --with-jansson-bundled && make && make install && make samples && make config

COPY sip.conf /etc/asterisk
COPY rtp.conf /etc/asterisk
COPY users.conf /etc/asterisk
COPY extensions.conf /etc/asterisk
COPY voicemail.conf /etc/asterisk
COPY features.conf /etc/asterisk

#Exposition des ports VOIP
EXPOSE 5060/tcp
EXPOSE 5060/udp
#port iax
EXPOSE 4569/udp
EXPOSE 4569/tcp
#port rtp
EXPOSE 19000-20000/udp


#lancer astÃ©rix
CMD ["asterisk","-f"]