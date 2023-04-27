#!/bin/bash

cat /proc/meminfo | grep MemAvailable | tr -dc '0-9'
