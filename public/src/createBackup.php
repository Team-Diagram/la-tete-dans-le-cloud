<?php
session_start();
if(!empty($_POST)){
    if(isset($_POST['username']) && !empty($_POST['username'])) {
        $username = htmlspecialchars(strip_tags($_POST['username']));
        $script1 = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/backup.sh $username");
        echo "<pre>$script1</pre>";

        if (str_contains($scriptNewPassword,'error')) {
            $_SESSION['error_message'] = "Le backup n'a pas été crée $script1";
        }
    }
}

header("Location: /index.php");
?>
