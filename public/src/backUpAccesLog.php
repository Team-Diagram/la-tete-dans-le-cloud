$dataLogByIp = preg_split('/\s+/', $stringIps, -1, PREG_SPLIT_NO_EMPTY);
$dataLogByIp = array_values($dataLogByIp);

//var_dump($uniqIp);
var_dump($dataLogByIp);

for ($i = 0; $i < count($dataLogByIp); $i += 2) {
echo "<p class='user'>" . $dataLogByIp[$i] . "<span class='user-storage'>" . $dataLogByIp[$i+1] . "</span></p>";
}
?>

<div class="consommation_stockage">
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Nombre total d'IP</p>
        <p class='space-total'><?= $uniqIp ?></p>
    </div>
    <div class="consommation_stockage_item">
        <p class="size-18 font-medium">Stockage utilisé</p>
        <p class='space-used'><?= $dataLogByIp ?></p>
    </div>

</div>
