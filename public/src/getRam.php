<?php

$totalMemori = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotAlRam.sh");
$memoriAvailable = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getAvailableRam.sh");

echo "<div class='users-ram'>";
    echo "<p class='memoire-total'>" . $totalMemori . " kb</p>";
    echo "<p class='memoire-disponible'>" . $memoriAvailable . " kb</p>";
echo "</div>";

?>