<?php
session_start();
$success = false;

if(!empty($_POST)){
    if(isset($_POST['name_user'],$_POST['key_user'])) {
        $nameUser = $_POST['name_user'];
        $keyUser = $_POST['key_user'];

        $scriptUser = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/create_user.sh $nameUser '$keyUser'");
        echo "<pre>$scriptUser</pre>";        
        $success = true;
    }
}
if ($success) {
    $_SESSION['success_message'] = "L'utilisateur a bien été crée";
} else {
    $_SESSION['error_message'] = "L'utilisateur n'a pas été crée";
}
header("Location: /index.php");
?>
