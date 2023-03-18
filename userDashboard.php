<?php
define('__ROOT__', dirname(dirname(__FILE__)));
$title = 'Se Connecter';
ob_start();
?>

<div class="box_sign col-lg-6 col-sm-8 col-md-6 p-5 mt-5 mx-auto">
    <div class="h3 mt-3 mb-5 text-center h1">
        Veuillez choisir votre rôle d'utilisateur

    </div>
    <hr class="my-5">
    <div class="row justify-content-center pb-5">
        <div class="col-md-4 col-12 text-center mx-5">
            <a class="nav-link" href="login.php">
                <img style="width: 15rem;" class="rounded-circle shadow-lg" src="profile/user.jpg" class="card-img-top" alt="user_photo">
            </a>
            <div class="mt-">UTILISATEUR</div>
        </div>
        <div class="col-md-4 col-12 text-center mx-5">
            <a class="" href="login.php">
                <img style="width: 15rem;" class="rounded-circle shadow-lg" src="profile/admin.jpg" class="card-img-top" alt="user_photo">
            </a>
            <div class="mt-1">ADMIN</div>
        </div>
    </div>
    <hr class="my-5">
    <div class="text-white mt-5 text-center">
        <small>Vous n'avez pas de compte, <a class="text-warning" href="signup.php">inscrivez-vous</a> </small>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once(__ROOT__ . '/UserManagement/template.php');
?>