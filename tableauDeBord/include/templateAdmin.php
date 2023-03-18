<!DOCTYPE html>
<?php
// error_reporting(0);
// require_once(__ROOT__ . '/admin/library/session.php');
// $session = new Session();
// $session->sessionCheck();
// $admin = $session->get("alogin");

?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> <?php if (isset($title)) {
                echo $title;
            } ?> </title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>


<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand " href="index.html"> <img src="../../public/images/logo/logo.png" width="" height="60px" alt="Admin">
        </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0 text-black">
            Bienvenue <span> user name from table</span>
        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Visiter le site</a>
                    <!-- password change -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Déconnecter</a>
                </div>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <!-- left side bar -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Tableau de Board</div>

                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                            Votre Profile
                        </a>

                        <a class="nav-link mt-1" href="inbox.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-inbox" aria-hidden="true"></i></i></div>
                            Message
                        </a>

                        <!-- Users -->
                        <div class="sb-sidenav-menu-heading">users</div>
                        <a class="nav-link mt-1" href="inbox.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-user" aria-hidden="true"></i></i></div>
                            Ajouter noveau Admin
                        </a>

                        <a class="nav-link mt-1" href="inbox.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-user" aria-hidden="true"></i></i></div>
                            Changer Mot de passe
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    User Name
                </div>
            </nav>
        </div>




        <div id="layoutSidenav_content">
            <!-- dashboad body -->
            <main>

                <?php echo $content ?>



            </main>

            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">

                        <div class="text-muted">Copyright &copy; user management by sultan - Tous droit
                            réservés </div>
                        <div>
                            <a class="text-secondary" href="mention_legal.html">Mentions
                                Légales et CGU</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/datatables-demo.js"></script>
</body>

</html>
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small"></div>
        Moti sultan Nur
    </div>
</nav>