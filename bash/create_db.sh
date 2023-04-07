#!/bin/bash
USER=$2
DATABASE=$1
PASSWORD=$3


if [ ! -d /home/$USER/ ]
then
  echo "user $USER doesn't exist"
  exit 0
fi

sudo mysql -e "CREATE DATABASE $DATABASE;"
sudo mysql -e "CREATE USER '$USER'@'localhost' IDENTIFIED BY '$PASSWORD';"
sudo mysql -e "GRANT ALL PRIVILEGES ON $DATABASE.* TO '$USER'@'localhost';"
