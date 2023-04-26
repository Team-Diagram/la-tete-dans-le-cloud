#!/bin/bash
USERNAME=$1
DATE=$(date '+%d-%m-%Y-%H-%M-%S')
CHECK=`sudo cat /etc/passwd | grep $USERNAME | cut -d ':' -f 1`

if [ $USERNAME != $CHECK ]
then
  echo " error : user $USERNAME doesn't exist"
  exit 1
fi

tar cvzf /tmp/BACKUP_"$USERNAME"_"$DATE".tar --directory=/home/ "$USERNAME"