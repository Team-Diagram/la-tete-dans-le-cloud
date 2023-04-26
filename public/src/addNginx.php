<?php
session_start();
$success = false;

if(!empty($_POST)){
if(isset($_POST['user_ngnix'],$_POST['site_ngnix'],$_POST['domain_ngnix'])) {
    $nameUser = $_POST['user_ngnix'];
    $siteNginx = $_POST['site_ngnix'];
    $domainNginx = $_POST['domain_ngnix'];

    $scriptNginx = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/new_conf.sh $nameUser $siteNginx $domainNginx");
    echo "<pre>$scriptNginx</pre>";
}
}

$success = true;
    if ($success) {
        $_SESSION['success_message'] = "Le serveur Nginx de donnée a bien été crée";
    } else {
        $_SESSION['error_message'] = "Le serveur Nginx n'a pas été crée";
    }
header("Location: /index.php");
?>
