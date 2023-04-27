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
    <header>
        <div class="logo">
            <p class="font-familjenBold size-45 color-primary logo_text">La tête dans le <span class="cloud font-familjenBold size-45 color-primary">Cloud</span><span class="cul font-familjenBold size-45 color-primary">Cul</span></p>
        </div>

    </header>
    <main class="page_index">
        <section class="section_filters">
            <div class="section_filters_bloc">
                <p class="section_filters_bloc_item" id="btnCreate" onclick="filterButton()">Création serveur</p>
                <p class="section_filters_bloc_item" id="btnMaintenance" onclick="filterButton()">Maintenance serveur</p>
                <p class="section_filters_bloc_item" id="btnStat" onclick="filterButton()">Stockage serveurs</p>
                <div class="hover-filter"></div>
                <div class="background-filter"></div>
            </div>
        </section>
        <section class="section_form">
            <div class="section_form_item btnCreate" id="formCreate">
                <div class="section_form_item_user">
                    <div class="section_form_item_user_bloc">
                        <div class="section_form_item_user_bloc_title">
                            <h1 class="size-35">User</h1>
                        </div>
                        <form id="formUser" action="src/addUser.php" method="POST" class="section_form_item_user_bloc_form form_global">
                            <div class="group_form">
                                <div class="group_input">
                                    <label for="name_user" class="size-18 font-medium">Nom d'utilisateur</label>
                                    <input type="text" name="name_user" id="name_user" required>
                                </div>
                                <div class="group_input">
                                    <label for="key_user" class="size-18 font-medium">Clé publique</label>
                                    <input type="text" name="key_user" id="key_user" required>
                                </div>
                            </div>
                            <button class="button-global button-primary" id="submitAddUser" type="submit" name="submitAddUser">Ajouter un utilisateur</button>
                        </form>
                    </div>
                </div>
                <div class="section_form_item_user">
                    <div class="section_form_item_user_bloc">
                        <div class="section_form_item_user_bloc_title">
                            <h1 class="size-35">Nginx</h1>
                        </div>
                        <form id="formNgnix" action="src/addNginx.php" method="POST" class="section_form_item_user_bloc_form form_global">
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
                            <button class="button-global button-primary" id="submitAddNgnix" type="submit" name="submitAddNgnix">Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="section_form_item_user">
                    <div class="section_form_item_user_bloc">
                        <div class="section_form_item_user_bloc_title">
                            <h1 class="size-35">Base de données</h1>
                        </div>
                        <form action="src/addDb.php" method="POST" class="section_form_item_user_bloc_form form_global">
                            <div class="group_form">
                                <div class="group_input">
                                    <label for="username" class="size-18 font-medium">Nom utilisateur</label>
                                    <input type="text" name="username" id="user_database" required>
                                </div>
                                <div class="group_input">
                                    <label for="database" class="size-18 font-medium">Nom bdd</label>
                                    <input type="text" name="database" id="db_database" required>
                                </div>
                                <div class="group_input">
                                    <label for="password" class="size-18 font-medium">Mot de passe</label>
                                    <input type="text" name="password" id="password_database" required>
                                </div>
                            </div>
                            <button class="button-global button-primary" id="submitAddDb" type="submit" name="submitAddDb">Créer la bdd</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section_form_item btnMaintenance" id="formMaintenance">
                <div class="section_form_item_user">
                    <div class="section_form_item_user_bloc">
                        <div class="section_form_item_user_bloc_title">
                            <h1 class="size-35">Backup</h1>
                        </div>
                        <form action="src/createBackup.php" method="POST" class="section_form_item_user_bloc_form form_global">
                            <div class="group_form">
                                <div class="group_input">
                                    <label for="username" class="size-18 font-medium">Nom de l'utilisateur</label>
                                    <input type="text" name="username" id="domain_backup" required>
                                </div>
                            </div>
                            <button class="button-global button-primary" id="submitAddBackup" type="submit" name="submitAddBackup">Faire un backup</button>
                        </form>
                    </div>
                </div>
                <div class="section_form_item_user" id="dl-backup">
                    <div class="section_form_item_user_bloc">
                        <div class="section_form_item_user_bloc_title">
                            <h1 class="size-35">Télécharger un backup</h1>
                        </div>
                        <form method="POST" class="section_form_item_user_bloc_form form_global">
                            <div class="group_form">
                                <div class="group_input">
                                    <label for="username" class="size-18 font-medium">Nom de l'utilisateur</label>
                                    <input type="text" name="username" id="domain_backup" required>
                                </div>
                            </div>
                            <button onclick="scrollDlBackup()" class="button-global button-primary" id="submitDlBackup" type="submit" name="submitAddBackup">Télécharger un backup</button>
                        </form>
                        <div class="link-dl-backup">
                            <?php
                                include_once 'src/downloadBackup.php';
                                if (isset($_SESSION['backup_file'])) {
                                    echo $_SESSION['backup_file'];
                                    unset($_SESSION['backup_file']);
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="section_form_item_user" id="mdp-modify">
                    <div class="section_form_item_user_bloc">
                        <div class="section_form_item_user_bloc_title">
                            <h1 class="size-35">Modifier le mot de passe</h1>
                        </div>
                        <form action="src/newPassword.php" method="POST" class="section_form_item_user_bloc_form form_global">
                            <div class="group_form">
                                <div class="group_input">
                                    <label for="username" class="size-18 font-medium">Nom utilisateur</label>
                                    <input type="text" name="username" id="username" required>
                                </div>
                                <div class="group_input">
                                    <label for="password" class="size-18 font-medium">Nouveau mot de passe</label>
                                    <input type="text" name="password" id="password" required>
                                </div>
                            </div>
                            <button class="button-global button-primary" id="submitAddDb" type="submit" name="submitAddDb">Modifier le mot de passe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section_form_item btnStat" id="formStat">
                <div class="section_form_item_user">
                    <div class="section_form_item_user_bloc">
                        <div class="section_form_item_user_bloc_title">
                            <h1 class="size-35">Suivi du stockage</h1>
                        </div>
                        <div class="consommation_stockage">
                            <p class="size-18 font-medium">Utilisateur</p>
                            <p class="size-18 font-medium">Consomation </p>
                        </div>
                        <?php include_once 'src/usersStorage.php' ?>
                    </div>
                </div>
                <div class="section_form_item_user">
                    <div class="section_form_item_user_bloc">
                        <div class="section_form_item_user_bloc_title">
                            <h1 class="size-35">Suivi de la RAM</h1>
                        </div>
                        <div class="consommation_ram">
                            <p class="size-18 font-medium">Utilisateur</p>
                            <p class="size-18 font-medium">Consomation</p>
                        </div>
                        <?php include_once 'src/getRam.php' ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        session_start();
        if (isset($_SESSION['error_message'])) {
            echo '<div class="error-message"> <p>' . $_SESSION['error_message'] . '</p></div>';
            unset($_SESSION['error_message']);
        }
        ?>
    </main>
    <script type="text/javascript" src="./src/assets/js/filter-forms.js"></script>
    <script type="text/javascript" src="./src/assets/js/error-message.js"></script>
</body>
</html>
