<?php
define('__ROOT__', dirname(dirname(__FILE__)));

$title = 'ADMIN';
ob_start();
?>

<div class="container-fluid">
    <div class="card mb-4 mt-3">
        <h4 class="mt-4">Tableau de bord</h4>


        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <h1 class="card-text text-primary">2</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-light mb-4">
                    <div class="card-body">
                        <h5 class="card-title">New Application</h5>
                        <h1 class="card-text text-primary">2</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <h1 class="card-text text-primary">2</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Deleted Users</h5>
                        <h1 class="card-text text-primary">2</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Liste des Utilisateurs
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Adresse</th>
                            <th>Code Postal</th>
                            <th>Ville</th>
                            <th>Phone</th>
                            <th>photo</th>
                            <th>Sexe</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Hi</td>
                            <td>Moti Sultan</td>
                            <td>sultan@gmail.com</td>
                            <td>Rue du carnot</td>
                            <td>02400</td>
                            <td>Chateau Thierry</td>
                            <td>063456215</td>
                            <td>My Photo</td>
                            <td>Male</td>
                            <td>22/10/2023</td>
                            <td class="d-flex justify-content-center">
                                <a class="text-danger" href=""><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once(__ROOT__ . '/include/templateAdmin.php');
?>