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
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand active" href="index.php">VolPascher</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="comparateur.php">Comparateur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="formulaireconnexion1.php">Connection</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="formulaire_inscription.html">Inscription</a>
            </li>
        </ul>
    </div>
</nav>
<!------------------------------------------- FIN HEADER ------------------------------->


<main class="row justify-content-center contact ml-0 mr-0">
            <div class="container text-dark p-4">
              <h2 class="">Formulaire de contact</h2>

                <form action="#" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nom</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrer votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput1">Prénom</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrer votre prénom" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Adresse email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre adresse mail" required>
                      <small id="emailHelp" class="form-text text-muted">Votre adresse mail ne sera jamais partager.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTel">Téléphone</label>
                      <input type="tel" class="form-control" id="exampleInputTel" placeholder="Entrer votre numéro de téléphone" required>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Entrer votre message"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-dark bg-primary mb-5">Envoyer</button>
                  </form>  
            </div>
      </main>


        <!------------------------------------- FOOTER  --------------------------------->


        <footer class="container-fluid background">
          <ul class="link">
              <li><a href="#">Conditions générales de vente</a></li>
              <li><a href="#">Politique de confidentialité</a></li>
              <li><a href="#">Mentions légales</a></li>
          </ul>
      </footer>



      <script src="Antennes/js/jquery-3.5.1.slim.min.js"></script>
      <script src="Antennes/js/popper.min.js"></script>
      <script src="Antennes/js/bootstrap.min.js"></script>
      <script src="Antennes/js/script.js"></script>
        
        </body>
        </html>