#!/bin/bash
USER=$1
DATABASE=$2
PASSWORD=$3
CHECK=`sudo cat /etc/passwd | grep $USER | cut -d ':' -f 1`

if [ $USER != $CHECK ]
then
  echo "user $USER doesn't exist"
  exit 0
fi

sudo mysql -e "CREATE DATABASE $DATABASE;"
sudo mysql -e "CREATE USER '$USER'@'localhost' IDENTIFIED BY '$PASSWORD';"
sudo mysql -e "GRANT ALL PRIVILEGES ON $DATABASE.* TO '$USER'@'localhost';"
