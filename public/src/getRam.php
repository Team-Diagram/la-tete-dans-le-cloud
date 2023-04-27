<?php

$totalMemori = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotAlRam.sh");
$memoriAvailable = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getAvailableRam.sh");

echo "<div class='users-ram'>";
    echo "<p class='user'>" . $totalMemori . "</span></p>";
    echo "<p class='user'>" . $memoriAvailable . "</span></p>";
echo "</div>";

?>