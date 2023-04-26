<?php
session_start();

if(!empty($_POST)){
    if(isset($_POST['username'], $_POST['database'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['database']) && !empty($_POST['password'])){
        $username=htmlspecialchars(strip_tags($_POST['username']));
        $database=htmlspecialchars(strip_tags($_POST['database']));
        $password=htmlspecialchars(strip_tags($_POST['password']));
        
        $createDb = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/create_db.sh $username $database $password");
        echo "<pre>$createDb</pre>";

        if (strpos('error', $createDb)) {
            $_SESSION['error_message'] = "La base de donnée n'a pas été crée $createDb";
        }
    }
}
header("Location: /index.php");

?>