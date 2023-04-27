<?php

$totalMemori = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotAlRam.sh");
$memoriAvailable = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getAvailableRam.sh");
$usedMemori = $totalMemori - $memoriAvailable;
$percentUsedMemori = $usedMemori / $totalMemori * 100;

?>
<div class="consommation_stockage">
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage total</p>
        <p class='space-total'><?= $totalMemori ?> kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage utilisé</p>
        <p class='space-used'><?= $usedMemori ?> kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage disponible</p>
        <p class='space-available'><?= $memoriAvailable ?> kb</p>
    </div>
</div>

<div class='stockage-bar'>
    <div class='stockage-bar-used' style="width: <?= $percentUsedMemori ?>;"></div>
</div>