#!/bin/bash
USERNAME=$1
PASSWORD=$2

CHECK=`sudo cat /etc/passwd | grep $USERNAME | cut -d ':' -f 1`

if [ $USERNAME != $CHECK ]
then
  echo "user $USERNAME doesn't exist"
  exit 0
fi

sudo echo "$USERNAME:$PASSWORD" | sudo chpasswd