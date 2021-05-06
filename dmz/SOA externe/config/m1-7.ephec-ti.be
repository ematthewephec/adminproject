;
; BIND data file for local loopback interface
;
$ORIGIN m1-7.ephec-ti.be.
$TTL    604800
@       IN      SOA     ns.m1-7.ephec-ti.be. m1-7.ephec-ti.be. (
                              1         ; Serial
                         604800         ; Refresh
                          86400         ; Retry
                        2419200         ; Expire
                         604800 )       ; Negative Cache TTL
;
@	IN	NS	ns.m1-7.ephec-ti.be.    
@	IN	A	135.125.101.202
@	IN	MX	10	mail

ns	IN	A	135.125.101.202
www	IN	A	135.125.101.198
b2b	IN	CNAME	www
intranet	IN	CNAME	www

mail	IN	A	135.125.101.198
smtp 	IN	CNAME	mail
pop3	IN	CNAME	mail
sip	IN	A	135.125.101.198
_sip._udp.m1-7.ephec-ti.be.    SRV 0 0 5060 sip