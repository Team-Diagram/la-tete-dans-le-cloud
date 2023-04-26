<?php    
    session_start();
    $success = false;
    
    if(!empty($_POST)){
        if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
            $username = htmlspecialchars(strip_tags($_POST['username']));
            $password = htmlspecialchars(strip_tags($_POST['password']));
            $scriptNewPassword = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/new_password.sh $username $password");            
            $success = true;
            echo "<pre>$scriptNewPassword</pre>";
        }
    }

    if ($success) {
        $_SESSION['success_message'] = "La modification de mot de passe à bien été fait";
    } else {
        $_SESSION['error_message'] = "La modification de mot de passe n'a pas été faites";
    }

    header("Location: /index.php");
?>