<?php

$totalSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotalSpace.sh");
$availableSpace = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getavailableSapce.sh");
$usedSpace = $totalSpace - $availableSpace;
$percentUsedSpace = $usedSpace / $totalSpace * 100;
?>
<div class="consommation_stockage">
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage total</p>
        <p class='space-total'><?php $totalSpace ?> kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage utilisé</p>
        <p class='space-used'><?php $usedSpace ?> kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage disponible</p>
        <p class='space-available'><?php $availableSpace ?> kb</p>
    </div>
</div>

<div class='stockage-bar'>
    <div class='stockage-bar-used' style="width: <?php $percentUsedSpace ?>%"></div>
</div>