<?php
define('__ROOT__', dirname(dirname(__FILE__)));
$title = 'Se Connecter';
ob_start();
require_once(__ROOT__ . '/UserManagement/library/loginAuth.php');

?>

<div class="box_sign col-lg-4 col-sm-8 col-md-6 p-5 mt-5 mx-auto shadow-lg row justify-content-center">
    <div class="h3 mt-3 mb-2 text-center h3">
        <i class="fas fa-user"></i> <br>
        Se Connecter
    </div>
    <small class="text-center h5 w-75 display_msg"> <?php echo $errMsg; ?> </small>
    <small class="text-center h5 w-75 display_Smsg"> <?php echo $msgSuccess; ?> </small>

    <form action="" method="POST">
        <div class="form-group">
            <label class="small mb-1" for="email">Adresse email</label>
            <input class="form-control" name="email" type="email" />
            <small class="d_msg p-1 "> <?php echo $errEmail ?> </small>
        </div>
        <div class="form-group mt-3">
            <label class="small mb-1" for="password">Mot de pass</label>
            <input class="form-control" type="password" name="password" />
            <small class="d_msg p-1"> <?php echo $errMDP ?> </small>
        </div>

        <div class="form-check mt-1">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <small class="form-check-label text-white" for="gridCheck">
                Se souvenir du mot de passe
            </small>
        </div>
        <div class="mt-4">
            <input type="submit" name="login" class="btn btn-warning w-100" value="Se Connecter">
        </div>
    </form>

    <div class="text-white">
        <small>Vous n'avez pas de compte, <a class="text-warning" href="signup.php">inscrivez-vous</a> </small>
    </div>
</div>


<?php
$content = ob_get_clean();
require_once(__ROOT__ . '/UserManagement/template.php');
?>