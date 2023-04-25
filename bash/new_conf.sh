#!/bin/bash
USER=$1
CONF=$2
DOMAINE=$3
CHECK=`sudo cat /etc/passwd | grep $USER | cut -d ':' -f 1`

if [ $USER != $CHECK ]
then
  echo "user $USER doesn't exist"
  exit 0
fi

sudo chmod 755 /home/$USER

if [ -d /home/$USER/$CONF ]
then
  echo "repository $CONF already exist"
  exit 0
fi

sudo mkdir /home/$USER/$CONF

sudo chmod 755 /home/$USER/$CONF/

sudo touch /home/$USER/$CONF/index.html

sudo chmod 757 /home/$USER/$CONF/index.html

echo "<h1>$CONF est le site de $USER sur le domaine $DOMAINE</h1>" > /home/$USER/$CONF/index.html

if [ -d /etc/nginx/sites-enabled/$CONF ]
then
  echo "conf $CONF already exist"
  exit 0
fi

sudo chmod 755 /etc/nginx/sites-enabled

sudo touch /etc/nginx/sites-enabled/$CONF

sudo chmod 757 /etc/nginx/sites-enabled/$CONF

printf '%s\n' \
  "server { " \
  "	listen 80; " \
  "	listen [::]:80; " \
  "	server_name $DOMAINE; " \
  "	root /home/$USER/$CONF; " \
  "	index index.html index.htm index.nginx-debian.html; " \
  " " \
  "	server_name _; " \
  " " \
  "	location / { " \
  "		try_files \$uri \$uri/ =404; " \
  "	} " \
  "	location ~* ^.+\.(xml|ogg|ogv|svg|svgz|eot|otf|woff|)$ " \
  "	{ " \
  "		access_log off; " \
  "		log_not_found off; " \
  "		expires max; " \
  "	} " \
  "} " \
  > /etc/nginx/sites-enabled/$CONF

sudo chmod 754 /etc/nginx/sites-enabled/$CONF
