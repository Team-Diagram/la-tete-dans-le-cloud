<?php

$totalMemori = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotAlRam.sh");
$memoriAvailable = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getAvailableRam.sh");

