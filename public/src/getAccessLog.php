<?php

$uniqIp = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/uniqIp.sh");
$dataLogByIp = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/dataLogByIp.sh");

var_dump($uniqIp);
var_dump($dataLogByIp);
?>

<div class="consommation_stockage">
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage total</p>
        <p class='space-total'><?= $uniqIp ?> kb</p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage utilisé</p>
        <p class='space-used'><?= $dataLogByIp ?> kb</p>
    </div>
</div>