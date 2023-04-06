#!/bin/bash
USER=$1
CONF=$2
DOMAINE=$3

if [ ! -d /home/$USER/ ]
then
  echo "user $USER doesn't exist"
  exit 0
fi

sudo chmod 755 /home/$USER

if [ -d /etc/nginx/sites-enabled/$CONF ]
then
  echo "conf $CONF already exist"
  exit 0
fi

sudo chmod 755 /etc/nginx/sites-enabled

sudo touch /etc/nginx/sites-enabled/$CONF

sudo chmod 757 /etc/nginx/sites-enabled/$CONF

TEXTE="server { \n
	listen 80; \n
	listen [::]:80; \n
	server_name $DOMAINE; \n
	root /home/$USER/$CONF; \n
	index index.html index.htm index.nginx-debian.html; \n
\n
	server_name _; \n
\n
	location / { \n
		try_files \$uri \$uri/ =404; \n
	} \n
	location ~* ^.+\.(xml|ogg|ogv|svg|svgz|eot|otf|woff|)$ \n
	{ \n
		access_log off; \n
		log_not_found off; \n
		expires max; \n
	} \n
}\n
"
echo $TEXTE >> /etc/nginx/sites-enabled/$CONF

sudo chmod 754 /etc/nginx/sites-enabled/$CONF
