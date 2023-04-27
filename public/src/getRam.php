<?php

$totalMemori = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getTotAlRam.sh");
$memoriAvailable = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/getAvailableRam.sh");
$usedMemori = $totalMemori - $memoriAvailable;
$percentUsedMemori = $usedMemori / $totalMemori * 100;

?>
<div class="consommation_stockage">
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">RAM totale</p>
        <p class='space-total'><?= $totalMemori ?> Kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">RAM utilisée</p>
        <p class='space-used'><?= $usedMemori ?> Kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">RAM disponible</p>
        <p class='space-available'><?= $memoriAvailable ?> Kb</p>
    </div>
</div>

<div class='stockage-bar'>
    <div class='stockage-bar-used' style="width: <?= $percentUsedMemori ?>%;"></div>
</div>