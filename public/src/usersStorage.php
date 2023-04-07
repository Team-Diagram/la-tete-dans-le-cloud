<?php
    $getUsers = shell_exec("bash /var/www/html/la-tete-dans-le-cloud/bash/users_storage.sh");
    echo "<pre>$getUsers</pre>";
?>