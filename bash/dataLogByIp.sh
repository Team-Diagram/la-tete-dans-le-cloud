#!/bin/bash

sudo cat /var/log/nginx/access.log | cut -d ' ' -f 1 | sort -u |
while read p
do
WC=`sudo cat /var/log/nginx/access.log | grep $p | wc -l`
GEO=`curl http://ipinfo.io/$p 2> /dev/null | jq '.. | .country' 2> /dev/null`
echo "$p $WC $GEO"
done
