<?php


if($_POST){
    if(isset($_POST['username'], $_POST['database'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['database']) && !empty($_POST['password'])){
        $username=htmlspecialchars(strip_tags($_POST['username']));
        $database=htmlspecialchars(strip_tags($_POST['database']));
        $password=htmlspecialchars(strip_tags($_POST['password']));
        echo $username;
        echo $database;
        echo $password;
        echo "-----";
        $test = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/create_db.sh $username $database $password");

        echo $test;
    }
}


?>