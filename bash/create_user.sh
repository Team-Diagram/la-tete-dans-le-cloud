# ssh heticusr@40.66.43.209 "bash -s" < ./script.sh "'test2' 'cle ssh'"
#!/bin/bash
RSA="$2"

sudo useradd -m $1
sudo chmod 755 /home/$1

if [ ! -d /home/$1/.ssh ]
then
sudo mkdir /home/$1/.ssh
fi

sudo chmod 755 /home/$1/.ssh

if [ ! -f /home/$1/.ssh/authorized_keys ]
then
sudo touch /home/$1/.ssh/authorized_keys
fi

sudo chmod 757 /home/$1/.ssh/authorized_keys

echo $RSA >> /home/$1/.ssh/authorized_keys

sudo chmod 754 /home/$1/.ssh/authorized_keys
