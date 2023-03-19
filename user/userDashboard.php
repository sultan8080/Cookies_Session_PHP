<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once('../library/classList.php');

$title = 'Se Connecter';
ob_start();

$session = new Session;
$session->sessionCheck();

$user = $_SESSION['login'];
$BD = new ConnectDB();
$queryUsers = $BD->selectData("SELECT * FROM users WHERE email ='$user'");
foreach ($queryUsers as $userData) {
?>
    <div class="container-fluid">
        <div class="row justify-content-center pb-5">
            <div class="col-md-4 col-12 text-center mt-2">
                <a class="nav-link" href="login.php">
                    <img style="width: 13rem;" class="rounded-circle shadow-lg" src="../uploads/<?php echo $userData->photo ?>" class="card-img-top" alt="user_photo">
                </a>
            </div>
        </div>
        <h4 class="text-center">Bienvenue <strong> <?php if ($userData->sexe == 'femme') {
                                                        echo "MADAME " . strtoupper($userData->nom);
                                                    } else {
                                                        echo "MONSIEUR " . strtoupper($userData->nom);
                                                    }
                                                    ?>
            </strong> </h4>
        <div class="card mb-4 mt-3">
            <div class="card-header">
                <h4>Votre Profile</h4>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-4 col-sm-6 mb-3">
                        <label class="small mb-1" for="nom">Nom</label>
                        <input class="form-control" value="<?php echo  strtoupper($userData->nom) ?>" type="text" readonly />
                    </div>
                    <div class="form-group col-md-4 col-sm-6 mb-3">
                        <label class="small mb-1" for="prenom">Prenom</label>
                        <input class="form-control" value="<?php echo strtoupper($userData->prenom) ?>" type="text" readonly />
                    </div>

                    <div class="form-group col-md-4 col-sm-6 mb-3">
                        <label class="small mb-1" for="email">Email</label>
                        <input class="form-control" value="<?php echo strtoupper($userData->email) ?>" type="email" readonly />
                    </div>

                    <div class="form-group col-md-4 col-sm-6 mb-3">
                        <label class="small mb-1" for="adresse">Adresse</label>
                        <input class="form-control" value="<?php echo strtoupper($userData->adress) ?>" type="text" readonly />
                    </div>
                    <div class="form-group col-md-4 col-sm-6 mb-3">
                        <label class="small mb-1" for="codePost">Code Postal</label>
                        <input class="form-control" value="<?php echo strtoupper($userData->codePostal) ?>" type="text" readonly />
                    </div>

                    <div class="form-group col-md-4 col-sm-6 mb-3">
                        <label class="small mb-1" for="ville">Ville </label>
                        <input class="form-control" value="<?php echo strtoupper($userData->ville) ?>" type="text" readonly />
                    </div>
                    <div class="form-group col-md-4 col-sm-6 mb-3">
                        <label class="small mb-1" for="ville">Date de Création </label>
                        <input class="form-control" value="<?php echo $userData->createdAt = date("F j, Y, g:i a") ?>" type="text" readonly />
                    </div>
                </div>
                <div class="card-body">
                    <a class="text-danger" href=""><i class="fa fa-edit"></i> Modifier</a>
                </div>
            </div>
        </div>
    </div>

<?php
}
$content = ob_get_clean();
require_once(__ROOT__ . '\include\templateUser.php');
?>