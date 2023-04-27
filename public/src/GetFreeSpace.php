<?php

$totalSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotalSpace.sh");
$availableSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getavailableSapce.sh");

echo "<div class='users-ram'>";
    echo "<p class='space-total'>" . $totalSpace . " kb</p>";
    echo "<p class='space-disponible'>" . $availableSpace . " kb</p>";
echo "</div>";