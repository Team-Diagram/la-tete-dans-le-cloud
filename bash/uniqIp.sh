#!/bin/bash

sudo cat /var/log/nginx/access.log | cut -d ' ' -f 1 | sort -u | wc -l
