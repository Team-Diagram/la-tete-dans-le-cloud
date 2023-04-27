<?php

$uniqIp = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/uniqIp.sh");
$dataLogByIp = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/dataLogByIp.sh");

var_dump($uniqIp);
var_dump($dataLogByIp);
