<?php


echo "Connexion établie";

echo "<pre>";
var_dump($_POST);
echo "<pre>";


$mdp = htmlentities($_POST['mdp']);
$email = htmlentities($_POST['email']);
$nom = htmlentities($_POST['nom']);
$prenom = htmlentities($_POST['prenom']);
$ville = htmlentities($_POST['ville']);
$desti1 = htmlentities($_POST['desti1']);
$desti2 = htmlentities($_POST['desti2']);
$pseudo = htmlentities($_POST['pseudo']);




if(isset($_POST['mdp']) || isset($_POST['email']) || isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['ville']) || isset($_POST['pseudo'])){                //l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['pseudo'])){        //le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ id est vide.";
    } 
    
    elseif(!preg_match("#^[a-z0-9]+$#",$_POST['pseudo'])){        //le champ pseudo est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que  des lettres minuscule + des chiffres (je préfère personnellement enregistrer le pseudo de mes membres en minuscule afin de ne pas avoir deux pseudo identique mais différents comme par exemple: Admin et admin)
        echo "L\'idendifiant doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";

    } elseif(strlen($_POST['pseudo'])>25){                        //l\'identifiant est trop long, il dépasse 25 caractères
        echo "L\'identifiant' est trop long, il dépasse 25 caractères.";

    } elseif(empty($_POST['mdp'])){                             //le champ mot de passe est vide
        echo "Le champ Mot de passe est vide.";

        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        //Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple


    } else {

    $link = mysqli_connect('localhost','root','','ntmg');

    $sql="INSERT INTO membres (mdp, email, nom, prenom, ville, desti1, desti2, pseudo)
	VALUES
    ('$mdp','$email','$nom','$prenom','$ville','$desti1','$desti2','$pseudo')";
    
    $result = mysqli_query($link, $sql);
    echo 'L\'inscription s\'est bien déroulé';

    }
} else {
    echo "Une erreur est survenu lors de l'inscription";
}






?>