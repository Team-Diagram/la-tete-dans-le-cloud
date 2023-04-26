<?php
    $string = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/users_storage.sh");

    $words = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
    $words = array_values($words);
    
    echo "<div class='users-storage'>";
    for ($i = 0; $i < count($words); $i += 2) {
        echo "<p class='user'>" . $words[$i] . "<span class='user-storage'>" . $words[$i+1] . "</span></p>";
    }
    echo "</div>";
?>