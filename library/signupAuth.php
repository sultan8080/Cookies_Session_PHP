<?php

require_once(__ROOT__ . '/UserManagement/library/classList.php');
$connDB = new ConnectDB();

if (isset($_POST['signup'])) {
    $fNom =  DataClean::DtClMethod($_POST['nom']);
  
    $fPrenom = $_POST['prenom'];

    $fEmail = $_POST['email'];

    $fPassword = $_POST['password'];
    $hashed_password = password_hash($fPassword, PASSWORD_DEFAULT);

    $fAdresse = $_POST['adresse'];
    $fCodePost = $_POST['codePost'];
    $fVille = $_POST['ville'];
    $fPhoto = $_POST['photo'];
    $fSexe = $_POST['sexe'];

    $record = array($fNom, $fPrenom, $fEmail, $hashed_password, $fAdresse, $fCodePost, $fVille, $fPhoto, $fSexe);
    $connDB->insertData($record);
}
