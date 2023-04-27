<?php

$uniqIp = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/uniqIp.sh");
$stringIps = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/dataLogByIp.sh");

$dataLogByIp = preg_split('/\s+/', $stringIps, -1, PREG_SPLIT_NO_EMPTY);
$dataLogByIp = array_values($dataLogByIp);

?>

<div class="consommation_stockage">
    <div class="consommation_stockage_item nombre-ip">
        <p class="size-18 font-medium">Nombre total d'IP</p>
        <p class='space-total'><?= $uniqIp ?></p>
    </div>
</div>
<div class="consommation_stockage title">
    <p class="size-18 font-medium">IP</p>
    <p class="size-18 font-medium">Pays</p>
</div>
<?php
echo "<div class='users-storage'>";
    for ($i = 0; $i < count($dataLogByIp); $i += 2) {
        echo "<p class='user'>" . $dataLogByIp[$i] . "<span class='user-storage'>" . $dataLogByIp[$i+1] . "</span></p>";
    }
echo "</div>";
?>
