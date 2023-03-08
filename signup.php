<?php
define('__ROOT__', dirname(dirname(__FILE__)));
$title = 'S\'inscrire';
ob_start();
require_once(__ROOT__ . '/UserManagement/library/signupAuth.php');
?>


<div class="box_sign col-xl-6 col-sm-10 col-md-8 p-5 mt-5 mx-auto shadow-lg row justify-content-center">
    <div class="h3 mt-3 mb-3 text-center h3">
        <i class="fas fa-user-plus"></i> <br>
        Inscrivez-vous
    </div>
    <small class="text-center my-2"> <span id="msg_erreur" class="p-1 px-3"> </span> <?php echo $errMsg; ?></small>

    <form action="" method="POST" name="signupform" onsubmit="return frontVerification()">

        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="nom">Nom</label>
                <input class="form-control" name="nom" type="text" />
            </div>
            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="prenom">Prenom</label>
                <input class="form-control" name="prenom" type="text" />
            </div>

            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="email">Email</label>
                <input class="form-control" name="email" type="email" />
            </div>
            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="password">Mot de pass</label>
                <input class="form-control" type="password" name="password" minlength="6" />
            </div>

            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="confirmPassword"> Confirmez le mot de passe</label>
                <input class="form-control" type="password" name="confirmPassword" minlength="6"  />
            </div>

            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="adresse">Adresse</label>
                <input class="form-control" name="adresse" type="text" />
            </div>
            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="codePost">Code Postal</label>
                <input class="form-control" name="codePost" type="text" />
            </div>

            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="ville">Ville </label>
                <input class="form-control" name="ville" type="text" />
            </div>
          
            <div class="form-group col-md-6 mb-3">
                <label class="small mb-1" for="photo">Télécharger votre photo</label>
                <input class="form-control" name="photo" type="file" />
            </div>

            <div class="form-group col-md-6 mb-3">
                Sexe :
                <div class="d-flex">

                    <div class="form-check mx-2">
                        <input class="form-check-input" type="radio" name="sexe" value="femme" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Femme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input me-2" type="radio" name="sexe" value="homme" >
                        <label class="form-check-label " for="flexRadioDefault1">
                            Homme
                        </label>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="mt-4 col-6 mx-auto">
            <input type="submit" name="signup" class="btn  btn-warning w-100" value="S'inscrire">
        </div>
    </form>

    <div class="text-white text-center">
        <small>Vous avez déjà un compte, <a class="text-warning" href="index.php">Connectez-vous</a> </small>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once(__ROOT__ . '/UserManagement/template.php');
?>