#!/bin/bash

sudo cat /var/log/auth.log | grep "session opened" | grep "$1" | wc -l
