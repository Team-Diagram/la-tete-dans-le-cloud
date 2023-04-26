#!/bin/bash
USERNAME=$1
CHECKUSERNAME=`sudo cat /etc/passwd | grep $USERNAME | cut -d ':' -f 1`

if [ $USERNAME != $CHECKUSERNAME ]
then
  echo " error : user $USERNAME doesn't exist"
  exit 1
fi

BACKUPFILES=`ls /tmp | grep BACKUP_"$USERNAME"`
echo $BACKUPFILES
