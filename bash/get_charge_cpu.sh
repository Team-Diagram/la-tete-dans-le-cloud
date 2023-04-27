#! /bin/bash

LINE=$(grep '^cpu' /proc/stat)

echo $LINE
