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
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Deconnection</a>
            </li>
        </ul>
    </div>
</nav>
<!------------------------------------------- FIN HEADER ------------------------------->


<div id="html" class="d-flex bg2 ">
    <form class="pdg rounded" action="#" method="POST">
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
            <div class="col-md-2 col-sm-12">
                <a href="#" type="submit" class="btn btn-primary">Rechercher</a>
            </div>
        </div>
    </form>  <!--Fin formulaire-->
</div>



<!-------------------------------------- CHOIX ------------------------------------------------------------ -->
<div class="container mt-5 fond text-center">
    <div class="row mb-5 p-2 d-flex justify-content-center flex-wrap">
        <div class="col-sm-3">
            <img class="img-point" src="Antennes/img/calendar.png" alt="">
            <h4 class="mt-3">Services</h4>
        </div>
        <div class="col-sm-3">
            <img class="img-point" src="Antennes/img/calendar.png" alt="">
            <h4 class="mt-3">Services</h4>

        </div>
        <div class="col-sm-3">
            <img class="img-point" src="Antennes/img/calendar.png" alt="">
            <h4 class="mt-3">Services</h4>

        </div>
        <div class="col-sm-3">
            <img class="img-point" src="Antennes/img/calendar.png" alt="">
            <h4 class="mt-3">Services</h4>

        </div>
    </div>

    <h3 class="text-center mb-4 text-uppercase font-weight-light text-dark p-2 animate__backInDown">Vols pas chers vers vos destinations de rêves</h3>

    <div class="row justify-content-center ">
        <div class="card m-3" style="width: 18rem;">
            <p class="p10 p-2">45 &euro;</p>
            <img class="card-img-top" src="Antennes/img/amsterdam.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Amsterdam</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Découvrir</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <p class="p10 p-2">90 &euro;</p>
            <img class="card-img-top" src="Antennes/img/dubai.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Dubaï</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Découvrir</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <p class="p10 p-2">65 &euro;</p>
            <img class="card-img-top" src="Antennes/img/spain.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Londres</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Découvrir</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <p class="p10 p-2">50 &euro;</p>
            <img class="card-img-top" src="Antennes/img/spain.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Rome</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Découvrir</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <p class="p10 p-2">75 &euro;</p>
            <img class="card-img-top" src="Antennes/img/spain.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Bali</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Découvrir</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem;">
            <p class="p10 p-2">60 &euro;</p>
            <img class="card-img-top" src="Antennes/img/spain.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Grèce</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Découvrir</a>
            </div>
        </div>
    </div>


    <div class="container mt-4 mb-4">
        <div class="row bg-primary p-3 row-ban justify-content-start align-items-center">
            <div class="col">
                <h2 class="text-shadow text-white">Vivez votre <br> rêve.</h2>
                <a href="#" class="btn btn-primary text-uppercase guillemet">Meilleurs tarifs</a>
            </div>
        </div>
    </div>
</div>

<!-- SECTION NEWSLETTER -->

<section class="newsletter mb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <h2>ABONNEZ-VOUS À NOTRE NEWSLETTER</h2>
                    <form action="index1.php"  method="POST">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Entrer votre Email">
                            <span class="input-group-btn">
                            <button class="btn" type="submit" name="submit">Abonnez-vous maintenant</button>
                        </span>
                        </div>


                        <?php
                    $result = '';



                    if (isset($_POST['submit']) and isset ($_POST['email'])) {

                        if (!empty($_POST['email'])){

                            $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL);

                            if(!$email)
                            {
                                $result = "L'e-mail que vous avez entré n'est pas une adresse e-mail valide.";
                            }
                            else
                            {

                                $link = mysqli_connect('localhost','root','');
                                mysqli_select_db($link,'newsletter');

                                $sql = 'INSERT INTO newletter (email) VALUES ("' . $_POST['email'].'")';
                                $sql1 = 'SELECT email FROM newletter WHERE email = "'.$_POST['email'].'"';

                                $recieved = mysqli_query($link, $sql1);

                                if ($recieved->num_rows !== 0)
                        {
                        $result = "<p style='margin-top: 20px; color: #fff3cd'> Votre email est déjà enregistré.</p>";
                        }
                        else
                        {

                        if (mysqli_query ($link, $sql))
                        {
                        $result = "<p style='margin-top: 20px; color: #fff3cd'>Votre email a été enregistré avec succès.</p>";
                        }
                        }
                        }
                        }
                        else
                        {
                        $result = '<p style="color: #fff3cd; margin-top: 20px">Veuillez saisir votre adresse e-mail.</p>';

                        }
                        }

                        echo $result;
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="container mt-5 mb-4">
    <div class="carousel slide" id="main-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
            <li data-target="#main-carousel" data-slide-to="3"></li>
        </ol><!-- /.carousel-indicators -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="/Antennes/img/pexels-thorsten-technoman-338515.jpg" alt="PARIS">
                <div class="carousel-caption d-none d-md-block">
                    <h1>PARIS</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci esse vitae exercitationem fugit, numquam minus!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="/Antennes/img/pexels-vlad-alexandru-popa-1486222.jpg" alt="Espagne">
                <div class="carousel-caption d-none d-md-block">
                    <h3>ESPAGNE</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci esse vitae exercitationem fugit, numquam minus!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="/Antennes/img/pexels-vlad-alexandru-popa-1486222.jpg" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h3>New York</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci esse vitae exercitationem fugit, numquam minus!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/Antennes/img/pexels-vlad-alexandru-popa-1486222.jpg" alt="" class="d-block img-fluid">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Mountain</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci esse vitae exercitationem fugit, numquam minus!</p>
                </div>
            </div>
        </div><!-- /.carousel-inner -->

        <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only" aria-hidden="true">Prev</span>
        </a>
        <a href="#main-carousel" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only" aria-hidden="true">Next</span>
        </a>
    </div>
</div>

</div>



<!-- FOOTER -->
<footer class="container">
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