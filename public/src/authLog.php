<?php

$today = date("M j" );

var_dump($today);

$failedPassword = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/failedPassword.sh '$today'");

var_dump($failedPassword);
