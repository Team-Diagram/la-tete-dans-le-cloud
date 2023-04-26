<?php

if(!empty($_POST)){
  if(isset($_POST['username']) && !empty($_POST['username'])) {
    $username = htmlspecialchars(strip_tags($_POST['username']));
    $data = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/get_backup.sh '$username' ");
    if (strpos($data,'error') === 0) {
      $_SESSION['error_message'] = "Le téléchargement n'a été pas fait $data";
  }
    $backup_files = explode(' ', $data);   
    $links_to_backup_files = array_map('create_links_to_backup', $backup_files);
    $_SESSION['backup_file'] = implode('', $links_to_backup_files);
  }
}

function create_links_to_backup($file) {
  return "<a href=../../../../../tmp/".$file." download>".$file."</a>";
}