#! /bin/bash
if [ ! -d /home/$USER/ ]
then
  exit 0
fi

date=$(date '+%d-%m-%Y')
username=$1

tar cvzf /tmp/"$username"_"$date".tar --directory=/home/ "$username"
