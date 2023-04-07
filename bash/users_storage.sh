#!/bin/bash

# Get all users
users=( $(getent passwd | awk -F: '{if ($6 ~ /^\/home/ && $3 >= 1000) print $1}') )

# Display column title
echo -e "user\t\tdiskusage"

# Display user stockage used
for user in "${users[@]}"
do
  # Get user stockage Ko
  dir_size=$(du -sk /home/$user 2>/dev/null | cut -f1)

  echo -e "$user\t\t$(expr $dir_size)K"
done | sort -k2 -h -r | awk '{printf("%-20s %-10s\n", $1, $2)}'