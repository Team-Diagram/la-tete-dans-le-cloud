<?php

$totalSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotalSpace.sh");
$availableSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getavailableSapce.sh");
$usedSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getUsedSpace.sh");

var_dump($totalSpace);
var_dump($availableSpace);
var_dump($usedSpace);