FROM ubuntu:latest

RUN apt-get update && apt-get install -y 
RUN apt-get install curl -y
RUN apt-get update && apt-get install -y bind9
RUN apt-get install -y dnsutils net-tools iputils-ping 


WORKDIR /etc/bind
COPY named.conf /etc/bind/named.conf
COPY zone/7.168.192.in-addr.arpa /etc/bind/master/7.168.192.in-addr.arpa
COPY zone/intranet /etc/bind/master/intranet
COPY resolv.conf /etc/resolv.conf