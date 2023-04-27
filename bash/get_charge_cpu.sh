#! /bin/bash

FIRST_LINE=$(grep '^cpu' /proc/stat)

read cpu user nice system idle iowait irq softirq steal guest guest_nice <<< "$FIRST_LINE"

cpu_time_all_processess=$((user + nice + system + irq + softirq + steal + guest + guest_nice))

cpu_time_last_statement=$((user + nice + system + idle + iowait + irq + softirq + steal + guest + guest_nice))

cpu_accurate=$(echo "scale=2; 100 * $cpu_time_all_processess / $cpu_time_last_statement" | bc)

cpu_formatted=$(printf "%.2f" $cpu_accurate)
cpu_formatted=$(printf "%0.2f" $cpu_formatted)

echo $cpu_formatted
