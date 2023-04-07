#!/bin/bash
RSA=$2
USERNAME=$1

sudo useradd -m $USERNAME
sudo chmod 755 /home/$USERNAME

if [ ! -d /home/$USERNAME/.ssh ]
then
sudo mkdir /home/$USERNAME/.ssh
fi

sudo chmod 755 /home/$USERNAME/.ssh

if [ ! -f /home/$USERNAME/.ssh/authorized_keys ]
then
sudo touch /home/$USERNAME/.ssh/authorized_keys
fi

sudo chmod 757 /home/$USERNAME/.ssh/authorized_keys

echo $RSA >> /home/$USERNAME/.ssh/authorized_keys

sudo chmod 754 /home/$USERNAME/.ssh/authorized_keys
