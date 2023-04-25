#!/bin/bash
USERNAME=$1
DATE=$(date '+%d-%m-%Y')
CHECK=`sudo cat /etc/passwd | grep $USERNAME | cut -d ':' -f 1`

if [ $USERNAME != $CHECK ]
then
  exit 1
fi

tar cvzf /tmp/"$USERNAME"_"$DATE".tar --directory=/home/ "$USERNAME"
