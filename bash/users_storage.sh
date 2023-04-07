#!/bin/bash

# Get all users
USERS=( $(getent passwd | awk -F: '{if ($6 ~ /^\/home/ && $3 >= 1000) print $1}') )

# Display user stockage used
for USER in "${USERS[@]}"
do
  # Get user stockage Ko
  DIRSIZE=$(du -sk /home/$USER 2>/dev/null | cut -f1)

  echo -e "$USER\t\t$(expr $DIRSIZE)K"
done | sort -k2 -h -r | awk '{printf("%-20s %-10s\n", $1, $2)}'