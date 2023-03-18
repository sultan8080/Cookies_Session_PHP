<?php

require_once(__ROOT__ . '/UserManagement/library/classList.php');

$fEmail = $fPassword = $err = $errMsg = $msgSuccess = $errEmail = $errMDP = "";
$err = 0;


if (isset($_POST['login'])) {

    // Email Validation
    $fEmail = MyClass::dataClean($_POST['email']);

    if (empty($fEmail)) {
        $errEmail = "L'email est obligatoire";
        $err = 1;
    } else {
        if (!filter_var($fEmail, FILTER_VALIDATE_EMAIL)) {
            $err = 1;
            $errEmail = "Email invalide";
        }
    }

    // Password empty check
    $fPassword = MyClass::dataClean($_POST['password']);
    if (empty($fPassword)) {
        $errMDP = "Mot de passe est obligatoire";
        $err = 1;
    }

    if ($err !== 1) {
        $connDb = new ConnectDB();
        $queryUser = $connDb->selectData("SELECT * FROM users WHERE email = '$fEmail'");
        if (count((array)$queryUser) > 0) {
            $password = $fPassword;
            foreach ($queryUser as $userData) {
                if (password_verify($password, $userData->motdepasse)) {
                    $session = new Session;
                    $session->setSession("login", $fEmail);
                    $msgSuccess = "Connexion Success !";

                    if ($userData->user_role == 'admin') {
                        header("Refresh: 2; url=./tableauDeBord/admin/admin.html");
                    } else {
                        header("Refresh: 2; url=./tableauDeBord/user/tableauDeBord.php");
                    }
                } else {
                    $errMsg = "Email ou Mot de passe incorrect";
                }
            }
        } else {
            $error_msg = "Échec de la connexion";
        }
    }
}
