<?php
    $chargeCPU = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/get_charge_cpu.sh");
    $chargeCPUin = str_replace(' ', '', $chargeCPU);
?>
<div class="consommation_stockage">
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Consommation</p>
        <p class='space-total'><?= $chargeCPU ?>%</p>
    </div>
</div>

<div class='stockage-bar'>
    <div class='stockage-bar-used' style="width: <?= $chargeCPU ?>;"></div>
</div>