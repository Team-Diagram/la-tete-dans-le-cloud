#!/bin/bash

df -h | grep /dev/root | cut -d 'G' -f 2 | tr -dc '0-9'
