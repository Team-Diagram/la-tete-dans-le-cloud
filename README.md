# 

### <p align="center">La tête dans le cloud</p>

<br>

## 1. Consigne
Réaliser une plateforme d’hébergement cloud permettant à un utilisateur de créer son compte, de disposer d’un espace (site Nginx) ou déposer ses fichiers (accessible via SSH / SFTP), de disposer d’une base de données (et des identifiants associés), de pouvoir suivre la consommation de son stockage et de voir ses backups quotidiens

## 2. Prérequis
- Installer Nginx, php7.4-fpn, MariaDB
- Ajouter dans /etc/skel : file '.ssh/authorized_keys' & directory 'tmd'
- Ajouter à la config nginx par default /etc/nginx/sites-enabled/default : 
```
server {
  listen 80 default_server;
  listen [::]:80 default_server;
  root /var/www/html/la-tete-dans-le-cloud/public;

  index index.php index.html index.htm index.nginx-debian.html;

  server_name _;

  location / {
    try_files $uri $uri/ =404;
  }

  location ~ \.php$ {
    include snippets/fastcgi-php.conf;
    fastcgi_pass unix:/run/php/php7.4-fpm.sock;
  }

  location ~ /\.ht {
    deny all;
  }
}
```
- Ajouter au template par default /etc/nginx/sites-enabled/template_conf : 
```
server {
	listen 80;
	listen [::]:80;
	server_name DOMAINE;
	root /home/USER/CONF;
	index index.html index.htm index.nginx-debian.html;

	server_name _;

	location / {
		try_files $uri $uri/ =404;
	}
	location ~* ^.+\.(xml|ogg|ogv|svg|svgz|eot|otf|woff|)$
	{
		access_log off;
		log_not_found off;
		expires max;
	}
}
```

<br>

## 3. Technologies utilisées

![Shell Script](https://img.shields.io/badge/shell_script-%23121011.svg?style=for-the-badge&logo=gnu-bash&logoColor=white)
![Nginx](https://img.shields.io/badge/nginx-%23009639.svg?style=for-the-badge&logo=nginx&logoColor=white)
![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![SASS](https://img.shields.io/badge/SASS-hotpink.svg?style=for-the-badge&logo=SASS&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)

<br>

## Membres de l'équipe

- [Romain Lhuillier](https://github.com/TisoOfficiel)
- [Pauline Miranda](https://github.com/polinzz)
- [Adrien Quimbre](https://github.com/Doud75)
- [Dimitri Chauvel](https://github.com/Hundraw)
- [Herby Nerilus](https://github.com/Nerilus)
- [Anthony RINGRESSI](https://github.com/anthony-rgs)
