<?php

    $chargeCPU = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/get_charge_cpu.sh");

    echo "<div class='charge-cpu'>";
        echo "<p class='cpu'>" . $chargeCPU . " %</p>";
    echo "</div>";

    
?>