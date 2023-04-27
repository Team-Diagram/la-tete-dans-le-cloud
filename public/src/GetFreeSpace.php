<?php

$totalSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotalSpace.sh");
$availableSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getavailableSapce.sh");
$usedSpace = $totalSpace - $availableSpace;
$percentUsedSpace = $usedSpace / $totalSpace * 100;
?>
<div class="consommation_stockage">
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">RAM total</p>
        <p class='space-total'><?= $totalSpace ?> kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">RAM utilisée</p>
        <p class='space-used'><?= $usedSpace ?> kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">RAM disponible</p>
        <p class='space-available'><?= $availableSpace ?> kb</p>
    </div>
</div>

<div class='stockage-bar'>
    <div class='stockage-bar-used' style="width: <?= $percentUsedSpace ?>%;"></div>
</div>