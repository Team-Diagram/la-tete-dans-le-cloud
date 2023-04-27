#!/bin/bash

cat /proc/meminfo | grep MemTotal | tr -dc '0-9'
