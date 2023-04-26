<?php
session_start();
$success = false;
if(!empty($_POST)){
    if(isset($_POST['username']) && !empty($_POST['username'])) {
        $username = htmlspecialchars(strip_tags($_POST['username']));
        $script1 = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/backup.sh $username");
        echo "<pre>$script1</pre>";

        $success = true;
       
    }
}
if ($success) {
    $_SESSION['success_message'] = "La base de donnée a bien été crée";
} else {
    $_SESSION['error_message'] = "La base de donnée n'a pas été crée";
}

header("Location: /index.php");
?>
