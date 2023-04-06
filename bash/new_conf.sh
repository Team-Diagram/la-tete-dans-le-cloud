#!/bin/bash
USER =$1
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

sudo mkdir /etc/nginx/sites-enabled/$CONF

sudo chmod 757 /etc/nginx/sites-enabled/$CONF

TEXTE="server {
	listen 80;
	listen [::]:80;
	server_name $DOMAINE;
	root /home/$USER/$CONF;
	index index.html index.htm index.nginx-debian.html;

	server_name _;

	location / {
		try_files \$uri \$uri/ =404;
	}
	location ~* ^.+\.(xml|ogg|ogv|svg|svgz|eot|otf|woff|)$
	{
		access_log off;
		log_not_found off;
		expires max;
	}
}
"
echo $TEXTE >> /etc/nginx/sites-enabled/$CONF

sudo chmod 754 /etc/nginx/sites-enabled/$CONF
