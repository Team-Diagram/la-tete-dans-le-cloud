<?php

$uniqIp = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/uniqIp.sh");
$dataLogByIp = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/dataLogByIp.sh");

//var_dump($uniqIp);
//var_dump($dataLogByIp);

echo "<div class='users-storage'>";
    for ($i = 0; $i < count($dataLogByIp); $i += 2) {
    echo "<p class='user'>" . $dataLogByIp[$i] . "<span class='user-storage'>" . $dataLogByIp[$i+1] . "</span></p>";
    }
echo "</div>";