<?php

$today = date("M j" );

$failedPassword = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/failedPassword.sh '$today'");
$sessionOpened = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/sessionOpened.sh '$today'");

var_dump($failedPassword);
var_dump($sessionOpened);
