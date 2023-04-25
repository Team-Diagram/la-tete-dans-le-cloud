#!/bin/bash
RSA=$2
USERNAME=$1

sudo useradd -m $USERNAME

sudo chmod 757 /home/$USERNAME/.ssh/authorized_keys
echo $RSA >> /home/$USERNAME/.ssh/authorized_keys
sudo chmod 754 /home/$USERNAME/.ssh/authorized_keys
