<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/assets/style/main.css">
    <title></title>
</head>
<body>
    <main class="page_index">
        <section class="section_form_user">
            <div class="section_form_user_bloc">
                <div class="section_form_user_bloc_title">
                    <h1 class="size-35">User</h1>
                </div>
                <form id="formUser" action="src/addUser.php" method="POST" class="section_form_user_bloc_form form_global">
                    <div class="group_form">
                        <div class="group_input">
                            <label for="name_user" class="size-18 font-medium">Nom d'utilisateur</label>
                            <input type="text" name="name_user" id="name_user" required>
                        </div>
                        <div class="group_input">
                            <label for="key_user" class="size-18 font-medium">Clé publique</label>
                            <input type="text" name="key_user" id="key_user" value="ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQC6uFFRdQAGblfTsI4NV9NdVair87K8oWpPV9Dr4YVr1thutvFkE999r1YPNl65QQMsidi3R/I5md5ZhiD/XsJTZkEkGws4pgLIwEylzA8W1le1UpC2OlUPxSf0c5mR9+1Fk23/6De1y2ZI66ECPSoZ1LgOuG1LZaw7iJu5swZTLpO9JdeYg9zQ3SxOPQMTmT7TluJfUGNB6ijmydLHZ6XKD1IpknIMWnuWaKPCBulQQa5gorg2vjAZVBCZpTKVZWo9Bb3Un4C3uhA5vJC9BhYzp4FU2coLTGPkV283SMHRSQz3HfOalmwulfpy44OMk6NDuO+XzyAjdieAXpNAktPpn2JdQ8dhVRy1GfDHuUemV+rauqWLpqT44M4//BevdU+/bKYjyue7KPLOXgyxdb+4IMEOT6q8TVL2v0fyCY3sN8Rw4IzpQNJAoY00yC9kgGr1A4LTV0c2QsxKayXWLBsP3XBXQPyyF+HCbMR2abiN5uY2VvLn6gyaeAttj9KJP8k= pauli@LAPTOP-3R8HEBRQ" required>
                        </div>
                    </div>
                    <button class="button-global button-primary" id="submitAddUser" type="submit" name="submitAddUser">Envoyer</button>
                </form>
            </div>
<<<<<<< HEAD
        </section>
        <section class="section_form_user">
            <div class="section_form_user_bloc">
                <div class="section_form_user_bloc_title">
                    <h1 class="size-35">Ngnix</h1>
                </div>
                <form id="formNgnix" action="src/addNgnix.php" method="POST" class="section_form_user_bloc_form form_global">
                    <div class="group_form">
                        <div class="group_input">
                            <label for="user_ngnix" class="size-18 font-medium">Nom d'utilisateur</label>
                            <input type="text" name="user_ngnix" id="user_ngnix" required>
                        </div>
                        <div class="group_input">
                            <label for="site_ngnix" class="size-18 font-medium">Nom du site</label>
                            <input type="text" name="site_ngnix" id="site_ngnix" required>
                        </div>
                        <div class="group_input">
                            <label for="domain_ngnix" class="size-18 font-medium">Domaine du site</label>
                            <input type="text" name="domain_ngnix" id="domain_ngnix" required>
                        </div>
                    </div>
                    <button class="button-global button-primary" id="submitAddUser" type="submit" name="submitAddUser">Envoyer</button>
                </form>
            </div>
        </section>
        <section class="section_form_user">
            <div class="section_form_user_bloc">
                <div class="section_form_user_bloc_title">
                    <h1 class="size-35">Backup</h1>
                </div>
                <form action="src/addBackup.php" method="POST" class="section_form_user_bloc_form form_global">
                    <div class="group_form">
                        <div class="group_input">
                            <label for="domain_ngnix" class="size-18 font-medium">Domaine du site</label>
                            <input type="text" name="domain_backup" id="domain_backup" required>
                        </div>
                    </div>
                    <button class="button-global button-primary" id="submitAddBackup" type="submit" name="submitAddBackup">Faire un backup</button>
                </form>
            </div>
        </section>
    </main>
=======
            <button class="button-global button-primary" id="submitAddUser" type="submit" name="submitAddUser">Envoyer</button>
        </form>
        <?php include_once 'src/usersStorage.php' ?>

    </section>
    <section>
        <form action="src/createBackup.php" method="POST">
            <input type="text" name="username" placeholder="Heticuser">
            <button type="submit">Faire un backup</button>
        </form>
    </section>
    <section>
        <form action="/src/addDb.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="database" placeholder="Database">
            <input type="text" name="password" placeholder="password">
            <button type="submit">Creer la base de donnée</button>
        </form>
    </section>
</main>
>>>>>>> f7e1f63450ad3f239f3ee0248be24861d3bda93f
</body>
</html>
