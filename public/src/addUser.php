<?php
session_start();

if(!empty($_POST)){
    if(isset($_POST['name_user'],$_POST['key_user'])) {
        $nameUser = $_POST['name_user'];
        $keyUser = $_POST['key_user'];

        $scriptUser = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/create_user.sh $nameUser '$keyUser'");
        echo "<pre>$scriptUser</pre>";        
        
        if (strpos('error', $scriptUser)) {
            $_SESSION['error_message'] = "Le user n'a pas été crée $scriptUser";
        }
    }
}
header("Location: /index.php");
?>
