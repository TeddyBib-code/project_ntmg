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


                <main class="header flex banniere">
                    <div class="container centrage">
                        <form class="p-5 rounded w-100" action="#" method="POST">
                            <div class="row form-group">
                                <!--Bouton qui selectionne allez simple ou avec retour link JS-->
                                  <select onchange="showForm()" class=" boutonForm btn btn-light bg-primary border-0 text-white mx-2 mb-2" id="selectType" name='volType' >
                                    <option class="p-4" value='option-1'>Allez-simple</option>
                                    <option value='option-2'>Allez-retour</option>
                                  </select>

                                  <!-- Formulaire pour le nombre de passager-->
                                <div class="dropdown mx-2">
                                    <button class="boutonForm btn btn-light bg-primary text-white border-0 dropdown-toggle mx-2" data-toggle="dropdown" type="button" id="dropdownMenuButton" >
                                      Nombre de passager
                                    </button>

                                    <div class="dropdown-menu p-1">
                                      <label for="numberPass">Nombre d'adultes</label>
                                      <input class=" mx-auto" type="number" name="numberPass" id="numberPass">
                                      <label for="numberChild">Nombre d'enfants</label>
                                      <input type="number" name="numberChild" id="numberChild">
                                    </div>
                                </div>

                                <!--Bouton pour selectionner la classe-->
                                <div class="dropdown mx-2">
                                      <select class="boutonForm btn btn-light bg-primary text-white border-0" name="classType" id="classType">
                                        <option value="Eco">Economique</option>
                                        <option value="PrCl">Première classe</option>
                                      </select>

                                </div>
                            </div>
                            <!--Formulaire aller simple-->

                                <div id="alleSimple" class="formini active">
                                    <div class="labelGroup row">
                                        <label class="col-md-4 text-light" for="departure">De :</label>
                                        <label class="col-md-4 text-light" for="arrive">A :</label>
                                        <label class="col-md-4 text-light" for="dateDep">Date :</label>
                                    </div>
                                    <div class="inputGroup row">
                                        <div class="col-md-4"><input type="text" name="departure" id="departure" placeholder="ex: Paris" class="form-control p-2"></div>
                                        <div class="col-md-4"><input type="text" name="arrive" id="arrive" placeholder="ex: Berlin" class="form-control p-2"></div>
                                        <div class="col-md-4"><input type="date" name="dateDep" id="dateDep" class="form-control p-2"></div>
                                    </div>

                                </div>  <!--Fin formulaire aller simple-->

                                  <!--Formulaire aller-retour-->

                            <div id="alleRetour" class="formini">

                                <div class="labelGroup row">
                                    <label class="col-md-3 text-light" for="departure">De :</label>
                                    <label class="col-md-3 text-light" for="arrive">A :</label>
                                    <label class="col-md-3 text-light" for="dateDep">Date de départ :</label>
                                    <label class="col-md-3 text-light" for="dateArr">Date d'arrivée :</label>
                                </div>
                                <div class="inputGroup row">
                                    <div class="col-md-3"><input type="text" name="departure" id="departure" placeholder="ex: Paris" class="form-control"></div>
                                    <div class="col-md-3"><input type="text" name="arrive" id="arrive" placeholder="ex: Berlin" class="form-control"></div>
                                    <div class="col-md-3"><input type="date" name="dateDep" id="dateDep" class="form-control"> </div>
                                    <div class="col-md-3"><input type="date" name="dateDep" id="dateDep" class="form-control"></div>
                                </div>

                            </div>  <!--Fin div aller retour-->


                            <div class="row mt-4"> <!--Bouton submit-->
                              <div class="col-md-10 col-sm-0"></div>
                              <div class="col-md-2 col-sm-12 text-right">
                                <a href="../Page comparateur/comparateur.html" type="submit" class="btn btn-primary">Rechercher</a>
                              </div>
                            </div>
                        </form>  <!--Fin formulaire-->
                    </div>
                  </main>

                <div class="animated">
                        <h1>Comparez tous les billets d'avion et trouvez un vol pas cher. <i class="fas fa-plane"></i></h1>
                </div>
        <script src="Antennes/js/jquery-3.5.1.slim.min.js"></script>
        <script src="Antennes/js/popper.min.js"></script>
        <script src="Antennes/js/bootstrap.min.js"></script>
        <script src="Antennes/js/script.js"></script>
                
    </body>
</html>