<?php

if(!empty($_POST)){
    if(isset($_POST['name_user'],$_POST['key_user'],$_POST['server_user'],$_POST['bdd_user'])
    && !empty($_POST['name_user']) && !empty($_POST['key_user']) && !empty($_POST['server_user']) && !empty($_POST['bdd_user'])) {
        $nameUser = $_POST['name_user'];
        $keyUser = $_POST['key_user'];

        $script1 = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/create_user.sh $nameUser '$keyUser'");
        echo "<pre>$script1</pre>";
    }
}
header("Location: /index.php");
?>
