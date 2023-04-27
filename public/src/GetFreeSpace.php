<?php

$totalSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotalSpace.sh");
$availableSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getavailableSapce.sh");
$usedSpace = $totalSpace - $availableSpace;
$percentUsedSpace = $usedSpace / $totalSpace * 100;


echo "<div class='users-ram'>";
    echo "<p class='space-total'>" . $totalSpace . " kb</p>";
    echo "<p class='space-used'>" . $usedSpace . " kb</p>";
    echo "<p class='space-available'>" . $availableSpace . " kb</p>";
echo "</div>";

?>
<div class='stockage-bar'>
    <div class='stockage-bar-used' style="width: <?php $percentUsedSpace ?>%"></div>
</div>