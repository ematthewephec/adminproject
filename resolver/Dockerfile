FROM ubuntu:latest

RUN apt-get update && apt-get install -y
RUN apt-get update && apt-get install -y bind9
RUN apt-get install -y dnsutils net-tools iputils-ping 
RUN apt-get install curl -y
RUN apt-get install nano -y

WORKDIR /etc/bind
COPY named.conf /etc/bind/named.conf

