<?php

$totalMemori = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotAlRam.sh");
$memoriAvailable = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getAvailableRam.sh");
$usedMemori = $totalMemori - $memoriAvailable;
$percentUsedMemori = $usedMemori / $totalMemori * 100;

echo "<div class='users-ram'>";
    echo "<p class='memoire-total'>" . $totalMemori . " kb</p>";
    echo "<p class='memoire-used'>" . $usedMemori . " kb</p>";
    echo "<p class='memoire-available'>" . $memoriAvailable . " kb</p>";
echo "</div>";

?>
<div class='stockage-bar'>
    <div class='stockage-bar-used' style="width: <?= $percentUsedMemori ?>%"></div>
</div>
