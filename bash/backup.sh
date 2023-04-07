#! /bin/bash

username=$1

if [ ! -d /home/$username/ ]
then
  exit 0
fi

date=$(date '+%d-%m-%Y')
tar cvzf /tmp/"$username"_"$date".tar --directory=/home/ "$username"
