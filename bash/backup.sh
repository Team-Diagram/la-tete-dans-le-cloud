#!/bin/bash
USERNAME=$1
DATE=$(date '+%d-%m-%Y')

if [ ! -d /home/$USERNAME/ ]
then
  exit 0
fi

tar cvzf /tmp/"$USERNAME"_"$DATE".tar --directory=/home/ "$USERNAME"
