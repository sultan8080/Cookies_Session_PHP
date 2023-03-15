<?php

require_once(__ROOT__ . '/UserManagement/library/classList.php');
$connDb = new ConnectDB();
$fnom = $fPrenom = $fPassword = $fEmail = $hashed_password = $fAdresse = $fCodePost = $fVille = $fPhoto = "";
$errMsg = $img_error = "";

$err;

if (isset($_POST['signup'])) {

    $fNom =  MyClass::dataClean($_POST['nom']);
    $fPrenom = MyClass::dataClean($_POST['prenom']);
    // Passwod hashing
    $fPassword = MyClass::dataClean($_POST['password']);
    $hashed_password = password_hash($fPassword, PASSWORD_DEFAULT);

    $fAdresse = MyClass::dataClean($_POST['adresse']);
    $fCodePost = MyClass::dataClean($_POST['codePost']);
    $fVille = MyClass::dataClean($_POST['ville']);
    $fEmail = MyClass::dataClean($_POST['email']);


    // email duplication check
    $queryEmail = $connDb->selectData("SELECT * FROM users WHERE email = '$fEmail'");
    if (sizeof($queryEmail) > 0) {
        $errMsg = "<span class='p-1 px-3 display_msg'> E-mail déjà utilisé, Veuillez utiliser un autre e-mail </span>";
        $err = 1;
    }

    //uploading photo
    $fPhoto = MyClass::dataClean($_FILES["photo"]["name"]);
    $tempName = $_FILES["photo"]["tmp_name"];
    $fPhotoSize = $_FILES["photo"]["size"];
    $target_folder = __ROOT__ . '/UserManagement/uploads/' . $fPhoto;
    if (strlen($fPhoto > 0)) {
        $file_parts = pathinfo($fPhoto);
        $allow_extension = array("JPEG", "jpeg", "jpg", "JPG", "PNG", "png");
        // photo extension verify
        if (!in_array($file_parts['extension'], $allow_extension)) {
            $img_error = "<span class='p-1 px-3 display_msg'> L'extension de photo non valide </span>";
            $err = 1;
        } else if ($fPhotoSize > 200000) {
            // photo size verify
            $img_error = "<span class='p-1 px-3 display_msg'> Votre photo est trop lourde (max 200kb) </span>";
            $err = 1;
        } else {
            move_uploaded_file($tempName, $target_folder);
        }
    } else {
        $img_error = "<span class='p-1 px-3 display_msg'> Vous n'avez pas sélectionné d'image </span>";
        $err = 1;
    }

    $fSexe = MyClass::dataClean($_POST['sexe']);


    if ($err !== 1) {
        // inserting data into table user
        $record = array($fNom, $fPrenom, $fEmail, $hashed_password, $fAdresse, $fCodePost, $fVille, $fPhoto, $fSexe);
        $connDb->insertData($record);
        $img_error = "<span class='p-1 px-3 bg-primary text-white'>  Votre compte utilisateur a été créé avec succès. Un administrateur vérifiera votre compte dans les meilleurs délais. </span>";
    }
}
