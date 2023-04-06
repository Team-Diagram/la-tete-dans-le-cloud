# ssh heticusr@40.66.43.209 "bash -s" < ./script.sh "'test2' 'cle ssh'"

# Emplacement personnalisé pour les fichiers de base de données
DATA_DIR="/opt/mysql-data"

# Installation de Mysql
# sudo apt update
# sudo apt install mariadb-server

# stopper le MySql
sudo systemctl stop mariadb.service

# Créer le répertoire de données
sudo mkdir -p $DATA_DIR

# Modifier les permissions pour le répertoire de données
sudo chown -R mysql:mysql $DATA_DIR

# Modifier l'emplacement des fichiers de base de données dans le fichier de configuration
sudo sed -i "s|datadir=/var/lib/mysql|datadir=$DATA_DIR|" /etc/mysql/mariadb.conf.d/50-server.cnf

# Démarrer la  MySQL
sudo systemctl start mariadb.service

# Connexion à MySQL
sudo mysql -u root

# Création de la base de données
CREATE DATABASE groupe14;

# Création de l'utilisateur
CREATE USER 'fuegos'@'localhost' IDENTIFIED BY 'sosa78';

# Attribution des droits à l'utilisateur
GRANT ALL PRIVILEGES ON groupe14.*
TO 'fuegos'@'localhost';

# Quitter MySQL
exit
