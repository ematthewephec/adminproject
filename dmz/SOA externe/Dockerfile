FROM ubuntu:20.04


RUN apt-get update
RUN apt-get install -y bind9
RUN apt-get install -y bind9utils


WORKDIR /etc/bind

VOLUME ["/etc/bind"]

COPY config/named.conf /etc/bind/named.conf
COPY config/named.conf.options /etc/bind/named.conf.options
COPY config/named.conf.default-zones /etc/bind/named.conf.default-zones
COPY config/named.conf.local /etc/bind/named.conf.local
COPY config/m1-7.ephec-ti.be /etc/bind/m1-7.ephec-ti.be



CMD ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]

