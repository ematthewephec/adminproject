FROM ubuntu:20.04


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
EXPOSE 5872/tcp
EXPOSE 5872/udp
#port iax
EXPOSE 4569/udp
EXPOSE 4569/tcp
#port rtp
EXPOSE 19000-20000/udp


CMD ["asterisk","-f"]