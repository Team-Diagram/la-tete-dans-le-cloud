#!/bin/bash

sudo cat /var/log/auth.log | grep "Failed password" | grep "$1" | wc -l
