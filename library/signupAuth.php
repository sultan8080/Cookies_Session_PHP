<?php

require_once(__ROOT__ . '/UserManagement/library/classList.php');
$connDb = new ConnectDB();

$errMsg = "";

if (isset($_POST['signup'])) {

    $fEmail = MyClass::dataClean($_POST['email']);

    // email duplication check
    $queryEmail = $connDb->selectData("SELECT * FROM users WHERE email = '$fEmail'");
    if (sizeof($queryEmail) > 0) {
        $errMsg = "<span class='p-1 px-3 display_msg'> E-mail déjà utilisé, utilisé un autre e-mail </span>";
    } else {
        $fNom =  MyClass::dataClean($_POST['nom']);
        $fPrenom = MyClass::dataClean($_POST['prenom']);
        // Passwod hashing
        $fPassword = MyClass::dataClean($_POST['password']);
        $hashed_password = password_hash($fPassword, PASSWORD_DEFAULT);

        $fAdresse = MyClass::dataClean($_POST['adresse']);
        $fCodePost = MyClass::dataClean($_POST['codePost']);
        $fVille = MyClass::dataClean($_POST['ville']);

        $fPhoto = MyClass::dataClean($_POST['photo']);
        $fSexe = MyClass::dataClean($_POST['sexe']);
    }



    // inserting data into table user
    $record = array($fNom, $fPrenom, $fEmail, $hashed_password, $fAdresse, $fCodePost, $fVille, $fPhoto, $fSexe);
    $connDb->insertData($record);
}
