#! /bin/bash

FIRST_LINE=$(grep '^cpu' /proc/stat)

read cpu user nice system idle iowait irq softirq steal guest guest_nice <<< "$FIRST_LINE"

cpu_time=$((user + nice + system + irq + softirq + steal + guest + guest_nice))

echo $cpu_time
