<?php    
    session_start();
    
    if(!empty($_POST)){
        if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
            $username = htmlspecialchars(strip_tags($_POST['username']));
            $password = htmlspecialchars(strip_tags($_POST['password']));
            $scriptNewPassword = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/new_password.sh $username $password");
            echo "<pre>$scriptNewPassword</pre>";
    
            if (strpos($scriptNewPassword, 'error') === 0) { 
                $_SESSION['error_message'] = "Le password n'a pas été modifié $scriptNewPassword";
            }
        }
    }
    header("Location: /index.php");
?>