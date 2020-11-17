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
                $nn = mysqli_fetch_assoc($requete);

                // Je verifier si le mot de passe est correct
                if($nn['password'] == sha1($password)){


                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $nn['id'];
                    var_dump($_SESSION);

                }
                // J'affiche le resulat
                $result = mysqli_query($link, $requete);
                echo "Connexion établie";

            }
        }
    }else{
        echo "Connexion echouer ";
    }




