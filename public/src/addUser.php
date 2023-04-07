<?php

if(!empty($_POST)){
    if(isset($_POST['name_user'],$_POST['key_user'])) {
        $nameUser = $_POST['name_user'];
        $keyUser = $_POST['key_user'];

        $scriptUser = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/create_user.sh $nameUser '$keyUser'");
        echo "<pre>$scriptUser</pre>";
    }
}
header("Location: /index.php");
?>
