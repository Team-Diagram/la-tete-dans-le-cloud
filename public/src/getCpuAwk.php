<?php

    $command = "awk -f /var/www/html/la-tete-dans-le-cloud/awk/get_charge_cpu.awk";

    $chargeCPU = shell_exec($command);

    echo "<div class='charge-cpu'>";
        echo "<p class='cpu'>" . $chargeCPU . " %</p>";
    echo "</div>";

    
?>