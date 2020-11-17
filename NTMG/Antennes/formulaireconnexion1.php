<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document text</title>
    <link rel="stylesheet" href="Antennes/css/style.css">
    <link rel="stylesheet" href="Antennes/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;700;900&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/6df7bd75ab.js" crossorigin="anonymous"></script>

</head>
    <body>


    <!----------------------------------------- HEADER --------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fix_menu_connexion">
        <a class="navbar-brand active" href="index.php">VolPascher</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <!------------------------------------------- FIN HEADER ------------------------------->

    <div class="sidenav">
        <div class="login-main-text">

        </div>
    </div>
        <div class="main">
            <div class="col-md-8 col-sm-12 centrage_form_connection">
                <div class="login-form">
                    <form method="POST" action="formulaireconnexion1.php" class="connexion">
                        <div class="message_bienvenue">
                            <h3 class="text-center w-100 ">Connectez-vous</h3>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Entrez votre email">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe">
                        </div>

                        <div class="text-center">
                            <div>
                                <label class="">Se souvenir</label>
                                <input type="checkbox" name="checkbox">
                            </div>
                            <div class="mb-2">
                                <a href="mot_passe_oubliee.php">Mot de passe oubliée?</a>
                            </div>
                            <div class="text-center bloc_check">
                            <div class="mb-3">
                                <input type="submit" name="submit" id="submit-connexion" class="btn btn-dark" value="Connexion">
                            </div>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a  class="nav-link btn btn-dark mb-2" id="link_inscription" href="formulaire_inscription.html">Inscription</a>
                                </li>
                            </ul>
                            </div>
                        </div>

                        <?php
session_start();

    echo "<pre>";
    var_dump($_POST);
    echo "<pre>";

    if(isset($_POST['submit'])) {

        // SECURISE LES CHAMPS CONTRE LES INJECTIONS
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // JE VERIFIE SI LES CHAMPS SONT VIDE
        if (isset($_POST['email']) && isset($_POST['password'])) {
            echo "Les champs nos pas été saisit";
        } else {
            // Je verifier si le mot de passe et l'email on été bien saisit par l'utilisateur :)
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                echo "saisissez votre email et mon de passe";
            } else {
                // Je me connecte à ma base de donneer
                $link = mysqli_connect('localhost', 'root', '', 'utilisateur');
                // Je selection ma requete
                $requete = "INSERT INTO user('email', 'password')";
                // J'affiche le resulat
                $result = mysqli_query($link, $requete);
                echo "Connexion établie";

            }
        }
    }else{
        echo "Connexion echouer ";
    }




?>

                        <!------------------------------------- FOOTER  --------------------------------->




    <script src="Antennes/js/jquery-3.5.1.slim.min.js"></script>
        <script src="Antennes/js/popper.min.js"></script>
        <script src="Antennes/js/bootstrap.min.js"></script>
        <script src="Antennes/js/script.js"></script>
                
    </body>
</html>