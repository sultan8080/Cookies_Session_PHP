<?php
define('__ROOT__', dirname(dirname(__FILE__)));
$title = 'Se Connecter';
ob_start();
?>

<div class="box_sign col-lg-6 col-sm-8 col-md-6 p-5 mt-5 mx-auto">
    <div class="h3 mt-3 mb-5 text-center h1">
        Veuillez choisir votre rôle d'utilisateur
        <hr class="my-5">
    </div>

    <div class="row justify-content-center pb-5">

        <div class="col-lg-4 col-12 text-center">
            <a class="nav-link" href="login.php">
                <img style="width: 15rem;" class="rounded-circle shadow-lg" src="profile/user.jpg" class="card-img-top" alt="user_photo">
            </a>
            <div class="mt-">UTILISATEUR</div>
        </div>
        <div class="col-lg-4 col-12  text-center">
            <a class="" href="login.php">
                <img style="width: 15rem;" class="rounded-circle shadow-lg" src="profile/admin.jpg" class="card-img-top" alt="user_photo">
            </a>
            <div class="mt-1">ADMIN</div>
        </div>
    </div>




</div>

<script type="text/javascript">
    function login() {
        location.href = 'login.php';
    }
</script>
<?php
$content = ob_get_clean();
require_once(__ROOT__ . '/UserManagement/template.php');
?>