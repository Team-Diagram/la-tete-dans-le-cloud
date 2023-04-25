#!/bin/bash
RSA=$2
USERNAME=$1

sudo useradd -m $USERNAME

echo $RSA >> /home/$USERNAME/.ssh/authorized_keys
