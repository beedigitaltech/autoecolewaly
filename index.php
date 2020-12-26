<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/logo_auto_ecole.svg" type="image/x-icon">
    <title>Auto Ecole Waly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

</head>

<body>

    <!-- Nav bar -->
    <?php
    include_once('pages/nav.php')
    ?>
    <!-- Banniere de la page -->
    <div class="cover">
        <img src=" images/cover.jpeg" class="img-fluid" alt="bannier de la page">
    </div>
    <!-- Fin de la banniere -->
    <!-- Jumbotron -->
    <section class="jumbotron jumbotron-fluid ">
        <div class="container">
            <div class="row d-flex align-items-center mt-4">
                <div class="col-xs-12 col-sm-12 col-md-4 qui-sommes-nous">
                    <img src="/images/logo.png " class="mt-3 mb-3 img-fluid" alt="image jumbotron" style="width:300px; height:300px">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 qui-sommes-nous-text">
                    <div class="text-left">
                        <h2 class="section-heading  text-uppercase mt-3 mb-3">Qui sommes nous ! </h2>
                    </div>
                    <p class="text-muted text-justify">
                        Située à Ouakam et à Ngor , l’AUTO ECOLE WALY vous accueille dans une ambiance familiale et conviviale.
                        Nous sommes composés d’une équipe de formateurs expérimentés et professionnels, qui vous accompagne et
                        vous donne les conseils appropriés afin de vous garantir la réussite.
                        Nous mettons tout en oeuvre afin de vous permettre d’obtenir votre permis haut la main
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Jumbotron -->
    <!-- Section Forfaits -->
    <section class="page-section " id="permis">
        <div class="container">
            <div class="">
                <h2 class=" text-center section-heading text-uppercase mt-5 mb-4">Nos Permis</h2>
                <div class="container mt-5 mb-5 text-center">
                    <h3 class="mb-2 text-muted permis-h3">Pourquoi choisir Auto Ecole Waly</h3>
                    <p class="text-muted permis-p">
                        L'auto école waly vous propose des cours de code illimité, de conduite illimité et des cours de créneau disponible sur place Jusqu’à l’obtention du permis
                    </p>

                    <div class="col-md-10 mx-auto">
                        <div class="row reveal">
                            <div class="col-md-4 mt-5 mb-5">
                                <i class=" fas fa-frown reveal-1">
                                    <hr style="color: #000000;">
                                </i>
                                <h1 class="card-title pricing-card-title categorie-title reveal-2 ">Satisfaction</h1>
                                <p class="reveal-3">
                                    Des élèves confiants et motivés, qui sont satisfaits de leurs enseignements
                                </p>
                            </div>
                            <div class="col-md-4 mt-5 mb-5">
                                <i class=" fas fa-medal reveal-1">
                                    <hr style="color: #000000;">
                                </i>
                                <h1 class="card-title pricing-card-title categorie-title reveal-2">Qualité </h1>
                                <p class="reveal-3">
                                    Des formateurs professionnels et compétents pour une réussite garantie
                                </p>
                            </div>
                            <div class="col-md-4 mt-5 mb-5">
                                <i class="far fa-check-circle reveal-1">
                                    <hr style="color: #000000;">
                                </i>
                                <h1 class="card-title pricing-card-title categorie-title reveal-2">Taux de réussite</h1>
                                <p class="reveal-3">
                                    Une auto-école organisée, pour obtenir votre permis du premier coup
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 reveal">
                <div class="row col-md-8 mx-3 card-deck mb-3 text-justify mx-auto">
                    <div class="col-md-6 card reveal-1 mb-4 shadow" style="background-color: #dadada;">
                        <div class="text-center mt-3 mb-3">
                            <img src=" images/voiture-picto.png " width="100px" alt="">
                            <hr>
                        </div>
                        <h4 class="my-0 mt-2 font-weight-normal text-center">Permis Normal</h4>

                        <div class="card-body text-center">
                            <p class="mt-3 text-muted">Retrouvez toutes nos formules concernant le permis normal. <br> Pour plus d'information <br> appellez au 77 579 41 58</p>
                            <hr>
                            <div class="text-center">
                                <i class="fas fa-chevron-circle-right"></i>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 card reveal-1 mb-4 shadow" style="background-color: #dadada;">
                        <div class="text-center mt-3 mb-3">
                            <img src=" images/etudiant.png " width="70px" alt="">
                            <hr>
                        </div>
                        <h4 class="my-0 mt-2 font-weight-normal text-center">Permis Etudiant</h4>

                        <div class="card-body text-center">
                            <p class="mt-3 text-muted">Retrouvez toutes nos formules concernant le permis étudiant. <br> Pour plus d'information <br> appellez au 77 579 41 58</p>
                            <hr>
                            <div class="text-center">
                                <i class="fas fa-chevron-circle-right"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--Fin  Section Forfaits -->
    <!-- Section Categorie -->

    <section class="page-section" id="categorie">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-5 mb-5">Nos Catégories</h2>
            </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row d-flex align-items-center reveal">
                    <div class="col-md-4 reveal-1">
                        <img src=" images/moto.jpg " class="card-img img-fluid" alt="...">
                    </div>
                    <div class="col-md-8 reveal-3">
                        <div class="card-body card-catégories">
                            <h5 class="card-title">PERMIS MOTO ET BICYCLETTE</h5>
                            <p class="text-muted">
                                Il existe trois catégories du permis moto : A1, A2 et A. Ces catégories requièrent différents examens et définissent
                                la taille de la cylindrée autorisée à être conduite.
                            </p>
                            <p class="text-muted">
                                L'obtention du permis A1 ou A2 est soumise notamment à des conditions d’âge, de formation et de réussite à un examen
                                composé d’une épreuve théorique générale moto (le code moto) et d’une épreuve pratique.
                            </p>
                            <p class="text-muted">
                                Le permis A permet de conduire toutes les motos avec ou sans side-car et tous les trois-roues motorisés quelle que
                                soit leur puissance.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="width: 100%;">
                <div class="row d-flex align-items-center reveal">
                    <div class="col-md-4 reveal-1">
                        <img src="images/auto.png" class="card-img img-fluid" alt="...">
                    </div>
                    <div class="col-md-8 reveal-2">
                        <div class="card-body card-catégories">
                            <h5 class="card-title">PERMIS POIDS LEGER</h5>
                            <p class="text-muted">
                                Le permis de conduire de catégorie B autorise son titulaire à conduire un véhicule automobile dont le poids maximal n’excède pas 3 500 kg et dont le nombre de places assises, outre le siège du conducteur, n’excède pas 8.
                                Le permis de conduire est délivré à l'issue d'un examen. L'examen comprend deux parties : une épreuve théorique ( sur le code )de la route et une épreuve pratique (de conduite).
                            </p>
                            <small class="font-weight-bold text-muted">Qui peut obtenir un permis de conduire ?</small>
                            <p class="text-muted">

                                Toute personne résidant sur le territoire sénégalais et âgé d'au moins 18 ans peut demander un permis de conduire pour véhicule léger.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row d-flex align-items-center reveal">
                    <div class="col-md-4 reveal-1">
                        <img src="images/lourd1.png " class="card-img img-fluid" alt="...">
                    </div>
                    <div class="col-md-8 reveal-2">
                        <div class="card-body card-catégories">
                            <h5 class="card-title">PERMIS POIDS LOURD</h5>
                            <p class="text-muted mr-3">
                                Le permis de conduire de catégorie C autorise son titulaire à conduire un véhicule automobile dont le poids est
                                supérieur à 3 500 kg. Il existe deux catégories de permis de conduire pour véhicules lourds :
                                <ul class="mr-3 ">
                                    <li class=" text-muted">
                                        La catégorie C : elle permet de conduire tout véhicule dont le poids total à charge (PTAC) est supérieur à 3 500
                                        kg et inférieur ou égal à 18 000 kg.

                                    </li>
                                    <li class=" text-muted">
                                        La catégorie C1 : elle permet de conduire tout véhicule de la catégorie C, mais aussi de conduire tout véhicule
                                        dont le PTAC est supérieur à 18 000 kg ou tout véhicule destiné au transport des matières dangereuses.

                                    </li>

                                </ul>

                            </p>
                            <small class="font-weight-bold text-muted ">Qui peut passer le permis de conduire pour véhicules lourds ?</small>
                            <p class="text-muted mr-3">

                                Toute personne résidant sur le territoire sénégalais, titulaire ou pas d'un permis de conduire pour véhicules légers
                                et remplissant les conditions d'âge (22 ans et plus).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row d-flex align-items-center reveal">
                    <div class="col-md-4 reveal-1">
                        <img src="images/Bus.svg" class="card-img img-fluid" alt="...">
                    </div>
                    <div class="col-md-8 reveal-2">
                        <div class="card-body card-catégories">
                            <h5 class="card-title">PERMIS TRANSPORT EN COMMUN</h5>
                            <p class="text-muted mr-3">
                                Il existe plusieurs types de permis du groupe D pour les véhicules dédiés au transport routier de personnes :
                                <ul class="mr-3 ">
                                    <li class=" text-muted">
                                        Le permis D1 : il permet de conduire un véhicule affecté au transport en commun de personnes comportant 16 passagers au maximum (conducteur non compris). La longueur du véhicule est limitée à huit mètres. On peut y atteler une remorque dont le PTAC ne dépasse pas 750 kg.

                                    </li>
                                    <li class=" text-muted">
                                        Le permis D1E : il permet la conduite d’un véhicule de la catégorie D1 attelé d’une remorque dont le PTAC est supérieur à 750 kg mais n’excède pas 3.5 tonnes.

                                    </li>
                                    <li class="text-muted">
                                        Le permis D : il permet de conduire un véhicule affecté au transport en commun de personnes comportant plus de 8 passagers (conducteur non compris). On peut y atteler une remorque dont le PTAC ne dépasse pas 750 kg. Il est possible de conduire un bus articulé avec le permis D.
                                    </li>
                                    <li class="text-muted">
                                        Le permis DE : il permet la conduite d’un véhicule de la catégorie D attelé d’une remorque dont le PTAC est supérieur à 750 kg mais n’excède pas 3.5 tonnes.
                                    </li>

                                </ul>

                            </p>
                            <small class="font-weight-bold text-muted ">Qui peut passer le permis de conduire pour véhicules lourds ?</small>
                            <p class="text-muted mr-3">

                                Toute personne résidant sur le territoire sénégalais, titulaire ou pas d'un permis de conduire pour véhicules légers
                                et remplissant les conditions d'âge (25 ans et plus).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </section>
    <!-- Fin Section Categorie -->
    <!-- Section Contact -->

    <?php include_once('pages/formContact.php') ?>

    <!-- Section Horaire -->

    <section class="page-section horraire">
        <div class="container padding">
            <div class="text-center">
                <h2 class="section-heading text-uppercase pt-5">Nos horraires</h2>
            </div>
            <div class="row center horraire-days mt-4 pb-5 ">

                <div class="col-4 col-sm-4 col-md-2 ">
                    <p>Lundi<br>8h30 - 12h<br> 15h-18h</p>
                </div>
                <div class="col-4 col-sm-4 col-md-2 ">
                    <p>Mardi<br>8h30 - 12h<br> 15h-18h</p>
                </div>
                <div class="col-4 col-sm-4 col-md-2 ">
                    <p>Mercredi<br>8h30 - 12h<br> 15h-18h</p>
                </div>
                <div class="col-4 col-sm-4 col-md-2 ">
                    <p>Jeudi<br>8h30 - 12h<br> 15h-18h</p>
                </div>
                <div class="col-4 col-sm-4 col-md-2 ">
                    <p>Vendredi<br>8h30 - 12h<br> 15h-18h</p>
                </div>
                <div class="col-4 col-sm-4 col-md-2 ">
                    <p>Samedi<br>8h - 12h<br> </p>
                </div>


            </div>
        </div>
    </section>
    <!-- Google Map-->
    <?php include_once('pages/localisation.php')  ?>
    <!-- Nos partenaires -->
    <section class="page-section partenaire mb-5 ">
        <div class="container text-center ">
            <div class="text-center">
                <h2 class="section-heading text-uppercase pt-5 mb-5">Nos Partenaires</h2>
            </div>
            <div class="row text-center d-flex align-items-center reveal">
                <div class="col-md-3 my-2">
                    <div class="mx-auto reveal-1" style="width: 14rem; height: 7rem;">
                        <img src="images/logo_IAM.jpg" class="img-fluid img-partenaire" style="height:80px" width="100%" alt="IAM">
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="mx-auto reveal-2" style="width: 14rem; height: 7rem;">
                        <img src="images/hecm.jpg" class="img-fluid img-partenaire" width="100%" alt="HECM">
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="mx-auto reveal-3" style="width: 14rem; height: 7rem;">
                        <img src="images/amdi.jpg" class="img-fluid img-partenaire" width="100%" alt="AMDI">
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="mx-auto reveal-4" style="width: 14rem; height: 7rem;">
                        <img src="images/dolima-logo.png" class="img-fluid img-partenaire" width="100%" style="height:100px" alt="Doolima">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include_once('pages/footer.php')  ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="js/app.js"></script>

</body>

</html>