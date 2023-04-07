#! /bin/bash
date=$(date '+%d-%m-%Y')
username=$1

tar cvzf /tmp/"$username"_"$date".tar --directory=/home/ "$username"
