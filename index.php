 <!-- EFFACER LES SAUVEGARDES A L'ACTUALISATION -->
 <!-- Pour ne pas renvoyer plusieurs fois le même message -->
 <?php

    session_start();

    if (!empty($_POST) or !empty($_FILES)) {
        $_SESSION['sauvegarde'] = $_POST;
        $_SESSION['sauvegardeFILES'] = $_FILES;

        $fichierActuel = $_SERVER['PHP_SELF'];
        if (!empty($_SERVER['QUERY_STRING'])) {
            $fichierActuel .= '?' . $_SERVER['QUERY_STRING'];
        }

        header('Location: ' . $fichierActuel);
        exit;
    }

    if (isset($_SESSION['sauvegarde'])) {
        $_POST = $_SESSION['sauvegarde'];
        $_FILES = $_SESSION['sauvegardeFILES'];

        unset($_SESSION['sauvegarde'], $_SESSION['sauvegardeFILES']);
    }

    ?>

 <!-- EDEBUT DU CORPS -->


 <!DOCTYPE html>
 <html lang="en">

 <head>

     <!-- Required meta tags -->


     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <meta http-equiv='X-UA-Compatible' content='IE=edge'>

     <title>Isaac DJEDJRO</title>


     <!-- lien HTML/CSS-->
     <link href='style.css' rel='stylesheet' type='text/css' media='screen'>
     <link href='portfolio.css' rel='stylesheet' type='text/css' media='screen'>
     <link href='stylepolice.css' rel='stylesheet' type='text/css' media='screen'>
     <link href='css2.css' rel='stylesheet' type='text/css' media='screen'>
     <link href='loader.css' rel='stylesheet' type='text/css' media='screen'>
     <!-- <link href='spinner.css' rel='stylesheet' type='text/css' media='screen'> -->

     <!-- Bootstrap 4 CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <!-- Animate link for effet objet -->
     <link rel=" stylesheet " href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css ">

     <!-- Lien Police -->
     <link href="https://fonts.googleapis.com/css?family= Homard | Spartiate & display = swap" rel="feuille de style">

     <!-- Lien Police Roboto -->
     <link href="https://fonts.googleapis.com/css?family= Oxanium: 500 & display = swap" rel="stylesheet">

     <!-- Lien sweet alert  -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


     <!-- Lien  reCaptcha  -->
     <script src="jquery-1.11.3.min.js"></script>
     <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
     <script src='https://www.google.com/recaptcha/api.js' async defer></script>

     <!-- Fin Lien Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/v4-shims.css">


     <!--  Lien loader button Jquery -->



 </head>



 <body>

     <div class="loader-container" id="">
         <div class="loader">
             <img class="" src="images/loadiGif.gif" style=" position: absolute;">
         </div>
     </div>

     <!-- Script loader 'CHARCHEMENT' -->

     <!-- <div onLoad=" Enter()" class="loader spinner spinner-border text-warning " style="height: 100px !important; width: 100px !important;">

             <img src="images/logo.png" class=" " style="height: 100%; width: 100%; border-radius: 50%;"></img>
         </div> -->






     <!-- Menu lg -->


     <nav class="container-fluid nav navbar navbar-expand-lg shadow-lg navbar-light fixed-top menu " style="border-bottom: 1px white;;">
         <!-- Just an image -->
         <div class="collapse  navbar-collapse shadow-none  nav-menu" id="navbarNav">



             <div class="  ">

                 <a class="" href="">
                     <img src="images/logo.png" width="70px" height="70px" alt="Logo" class="  border border-white rounded-circle">
                 </a>
             </div>


             <ul class="navbar-navn w-100 justify-content-center ">

                 <!--<li class=" survole_menu mr-5 ok ">
                                                        <a class=" " href="#Accueil">
                                                            <font style=" color: white; size: 14px; ">
                                                                <i class="fa fa-home text-center">
                                                                    <div class="souligne_menu " style="margin-top: 30px;">
                                                                    </div>
                                                                </i>
                                                            </font>
                                                        </a>
                                                    </li>-->


                 <li class="  survole_menu ">
                     <a class=" " href="#Ac85DpJgVnKJ???bB">
                         <font style=" "> Accueil
                             <div class="souligne_menu " style="margin-top: 10px;"></div>
                         </font>

                     </a>
                 </li>
                 <li class="survole_menu ">
                     <a class=" " href="#8JnbVG34S6DZsPo65ApR">
                         <font style="  ">A propos
                             <div class="souligne_menu " style="margin-top: 10px;"></div>
                         </font>

                     </a>
                 </li>
                 <li class=" survole_menu ">
                     <a class="  " href="#GksL5S2HnBJ5bHpKcOmP">
                         <font style="  ">Compétences
                             <div class="souligne_menu" style="margin-top: 10px;"></div>
                         </font>
                     </a>
                 </li>
                 <li class="survole_menu ">
                     <a class="" href="#JNsnIJ59S?238KnkIh5DiPl">
                         <font style=" ">Diplômes
                             <div class="souligne_menu " style="margin-top: 10px;"></div>
                         </font>

                     </a>
                 </li>
                 <li class="survole_menu ">
                     <a class="" href="#JHbshJJbs2869sVX3ExP">
                         <font style="  ">Expériences
                             <div class="souligne_menu " style="margin-top: 10px;"></div>
                         </font>

                     </a>
                 </li>

                 <li class=" survole_menu ">
                     <a class="" href="#Por695JSkNnskOSBXYv">
                         <font style="">Portfolio
                             <div class="souligne_menu " style="margin-top: 10px;"></div>
                         </font>

                     </a>
                 </li>
                 <li class=" survole_menu ">
                     <a class="" href="#747JNSjNvsgSOBCoNTdx">
                         <font style=" ">Contacts
                             <div class="souligne_menu " style="margin-top: 10px;"></div>
                         </font>

                     </a>
                 </li>

             </ul>
         </div>
         </div>

     </nav>





     <!-- Menu responsive xs sm md -->
     <nav class="nav top-nav fixed-top">


         <div class=" " style="width: 100%;">

             <!-- Menu Berger -->

             <span class="d-lg-none  menu_beurger" style="font-size:35px; cursor:pointer; margin-left: initial;  color:rgb(179, 179, 179) " onclick="openNav()">
                 <i class="fa fa-bars" style="color: white; margin-top: 20px; margin-left: 20px;"></i>
             </span>

             <!-- Logo Responsive-->

             <a class="navbar-brand d-lg-none   float-right" href="index.html">
                 <img src="images/logo.png" alt="Logo" class=" border border-warning rounded-circle mt-2 " style=" height: 60px; width: 60px; ">
             </a>

         </div>

         <!-- Menu Fermer -->
         <div id="mySidenav" class="sidenav d-lg-none ">
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



             <ul class="nav flex-column nav-pills justify-content-center ">
                 <li class=" ">
                     <a class="nav-link" href="#Ac85DpJgVnKJ???bB"><i class="fa fa-home"></i> Accueil </a>
                 </li>
                 <li class=" ">
                     <a class="nav-link" href="#8JnbVG34S6DZsPo65ApR"><i class="fa fa-user-circle"></i> A propos</a>
                 </li>
                 <li class=" ">
                     <a class="nav-link" href="#GksL5S2HnBJ5bHpKcOmP"><i class="fa fa-user-circle"></i> Compétences</a>
                 </li>
                 <li class=" ">
                     <a class="nav-link" href="#JNsnIJ59S?238KnkIh5DiPl"><i class="fa fa-user-circle"></i>Diplômes</a>
                 </li>
                 <li class=" ">
                     <a class="nav-link" href="#JHbshJJbs2869sVX3ExP"><i class="fa fa-user-circle"></i>Expériences</a>
                 </li>
                 <li class=" ">
                     <a class="nav-link" href="#Por695JSkNnskOSBXYv"><i class="fa fa-book"></i>Portfolio</a>
                 </li>
                 <li class=" ">
                     <a class="nav-link" href="#747JNSjNvsgSOBCoNTdx"><i class="fa fa-book"></i>Contacts</a>
                 </li>


             </ul>
         </div>

     </nav>
     <script>
         function openNav() {
             document.getElementById("mySidenav").style.width = "260px";
         }

         function closeNav() {
             document.getElementById("mySidenav").style.width = "0px";
         }
     </script>




     <!-- END Menu -->

     <!-- END Menu -->

     <!-- CORPS DE LA PAGE -->

     <!-- Accueil

                                        <section class="sec0">

                                            <div class="couv_sec0">
                                                <div class="div_message table-bordered" style="border-color: teal ">
                                                    
                                                    <h1 class="di"> <p> Je suis Isaac DJEDJRO </p></h1>
                                                    <a href="cv/ISAAC_DJEDJRO.pdf" target="_blank">
                                                        <button type="button" class="btn btn-warning btn_sec0 border-secondary"  >Télécharger mon CV</button>
                                                    </a>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </section> -->


     <div class="  auto bg-white">
         <!-- Caroussel -->

         <div id="carouselExampleIndicators" class=" entete carousel slide " style=" height: 100vh; width: 100%; background-attachment: fixed !important;" data-ride="carousel">

             <!-- Caroussel -->





             <div class="carousel-inner shadow  " id="Ac85DpJgVnKJ???bB">


                 <div class="carousel-caption ">
                     <div class=" " style="justify-content: center; align-items: center; padding: initial;">

                         <h1 class="animated lightSpeedIn Noms " style="margin-top: 50vh; "> Isaac DJEDJRO</h1>
                     </div>

                     <h3>
                         <p class="animated bounceInLeft mt-5 sous-noms ">Informaticien de formation</p>
                     </h3>
                     <p><a href="cv/ISAAC_DJEDJRO.pdf" target="_blank">
                             <button type="button" class="btn btn-outline-warning btn_sec0 animated  pulse infinite delay-1s border border-white pr-2 mt-3 shadow">
                                 <h3 class="Btn-Label ">Afficher mon CV</h3>
                             </button>
                         </a>
                     </p>

                 </div>


                 <!-- Caroussel -->

                 <div class="carousel-item active " style=" height:100vh; width: 100%; ">
                     <!--<p> Image diapo </p>-->
                     <!--<p> </p>-->
                     <img class="d-block w-100" class="" src="images/black2.jpg" alt="First slide" style=" height:100vh; width: 100%; ">
                 </div>
                 <div class="carousel-item " style=" height:100vh; width: 100%;">
                     <img class="d-block w-100" src="images/black.jpg" alt="Second slide" style=" height:100vh; width: 100% ; ">

                 </div>
                 <div class="carousel-item " style=" height:100vh; width: 100%;">
                     <img class="d-block w-100" src="images/b0.jpg" alt="Third slide" style=" height:100vh; width: 100%;">

                 </div>


             </div> <!-- / Bouton suiv et prec -->
         </div>

     </div>





     <div class="menu-aprpos mb-5" id="8JnbVG34S6DZsPo65ApR"></div>
     <div class=" container-fluid  text-center bg-warning" style="height: 240px; margin-top: 80px;">
         <div class="">
             <img src="images/ISAAC_2018.jpg" alt="..." class=" photo-dee img-thumbnail rounded-circle border-warning" height="198px" width="188px">
         </div>

     </div>



     <div class="container-fluid h-5 bg-danger">


     </div>



     <!-- A Propos -->

     <section class="sec1">

         <div class="container mb-0  name_profil">
             <h1 class="apropos titre-Projet">
                 <center>A PROPOS</center>
             </h1>
             <h6 class="sous-titre">
                 <center> Une illustration de mon profil en quelques lignes </center>
             </h6>

         </div>

         <div class="souligne  "></div>


         <div class="container d-flex flex-sm-column corp_sec1 p-5">


             <div class=" ">

                 <div class="">
                     <h1 class="Name">
                         <center>
                             <p>Isaac DJEDJRO,</p>
                         </center>
                     </h1>
                     <h5>
                         <p>Informaticien généraliste</p>
                     </h5>

                     <p>Pourquoi Informaticien généraliste ? </br>
                     </p>
                     <p>Je suis informaticien de formation (Réseaux et Génie Logiciel, Grade Licence), après ma formation
                         j'ai eu beaucoup de mal
                         à trouver ma voie dans ce domaine aussi vaste qu'est l'informatique. Je me suis donc donné à faire
                         tout ce qui me tombait sous
                         la main, ce qui ma permis d'apprendre de nombreuses choses dans ce domaine. Et lorsqu'on me demande
                         quel est ma spécialité
                         en informatique, je répond : je suis informaticien Généraliste, donc je suis à l'aise en tout ce qui
                         concerne l'informatique.
                     </p>

                     <p> Développeur Mobile & Web de Strasbourg
                         Je suis dévéloppeur front in et administrateur LAN. Diplômé d'un DUT en informatique, d'un BTS
                         informatique suivi d'une
                         RGL (licence professionnelle Réseaux et Génie Logiel). Je travaille actuellement en tant
                         qu'Assistant Informaticien de la CNDTIC
                         et du Cabinet du Ministère de la Santé de Côte d'Ivoire (MSHP)...</br>
                         Je maîtrise les techniques d’ingénierie liées à la conception des systèmes d’application web et site
                         internet,
                         ainsi que le déploiement, administrer un système d’exploitation et l’administration d’un réseau
                         local d’entreprise.</br></br>

                         Ce portfolio a pour but de présenter mes Compétences et les différents projets personnels sur
                         lesquels j'ai travaillé depuis la fin
                         de mon cycle universitaire.</br>
                         Vous pouvez également visualiser mon CV et le télécharger.</p>

                 </div>
                 <div class="col bg-secondary">

                     </br> </br>
                     <p>C'est tout moi, j'aurais aimé me présenter d'avantage mais si vous me le permettez je le ferai lors
                         d'un entretien.
                     </p></br> </br>
                 </div>

             </div>
         </div>
     </section>


     <!-- Diviseur Multi Ecrans-->
     <section class="sec3 container-fluid text-center bg-secondary">
         <div class=" container-fluid pt-3">
             <div class=" text-white text1 ">Compatible Mobiles, Tablettes, P.C</div>
             <p class=" text-white text2 ">Développement Web Responsive</p>
         </div>


     </section>

     <!-- GRAND Ecrans-->
     <div class="col-lg container-fluid d-sm-none d-md-block   d-none d-md-block  bg-warning" style="width: 750px; margin-top: 50px;  justify-content: center; align-items: center;">

         <img src="images/ecran5.png" style=" margin-top: -410px; justify-content: center; align-items: center;" alt="..." class="  container-fluid">

     </div>

     <!-- <div class="col-lg container-fluid  text-center " style="width:75%; height: 50px;  margin-top: -100px; justify-content: center; align-items: center; z-index: 10;">
         <div class=" " style="position: ;">
             <img src="images/ecran5.png" alt="..." class="img-thumbnail  " height="500px" width="600px" style=" background: none; margin-top: ;">


         </div>
     </div> -->



     <!-- PETIT Ecrans-->
     <!-- 
     <div class=" d-block done-sm col-lg  container-fluid" style="width: 100%; height: 300px; margin-top: -100px;  justify-content: center; align-items: center; z-index: 10;">

         <img src="images/ecran5.png" style=" margin-top:px; justify-content: center; align-items: center;" height="500px" width="750" class=" Ecran p-5">
     </div> -->


     <!-- END Diviseur Multi Ecrans-->




     <!-- ZONE COMPETENCES-->
     <div class=" " id="GksL5S2HnBJ5bHpKcOmP"></div>
     <!-- ZONE COMPETENCES-->
     <section class="sec2 pt-5">

         <!-- Projet réalisé-->
         <nav class="container p-5" aria-label="breadcrumb">
             <div class="titre">
                 <p class="titre-Projet ">MES COMPETENCES</p>
                 <p class="sous-titre P-1">Les différents domaines dans lesquels j'excelle.</p>
                 <div class="souligne"></div>
             </div>
         </nav>

         <div class="container " style="height: 100%;">
             <!-- COMPETENCES I -->
             <div class="row">
                 <div class="col-xs-12 col-sm-6 pb-3" style="list-style: none;">
                     <h4>Domaines de compétences</h4>



                     <li class="mt-4" style=" margin-left:  20px;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong> GESTION DE PROJETS WEB</strong>
                         <br>
                         <div class="concate"> Site vitrine, évènementiel, e-commerce, intranet.</div>

                     </li>

                     <li class="mt-2" style=" margin-left:  20px;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong>CONCEPTION GRAPHIQUE & WEBDESIGN</strong>
                         <br>
                         <div class="concate"> Logos, templates Web, plaquettes publicitaires, cartes de visite.</div>

                     </li>

                     <li class="mt-2" style=" margin-left:  20px²;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong class=""> ADMINISTRATION SYSTEME D'EXPLOITATION</strong>
                         <br>
                         <div class="concate"> Installation, configuration, gestion de disque, identification des technologies de stockage,
                             tolérance des pannes, Gestion des droits, Elaboration de tratégie administative etc...</div>


                     </li>

                     <li class="mt-2" style=" margin-left:  20px;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong>ADMINISTRATION RESEAU LOCAL</strong>
                         <br>
                         <div class="concate"> Câblage, Configuration de point d'accès, gestion de Serveur, Commutateur, Hub, Parmétrage TCPIP, DHCP etc...</div>

                     </li>

                     <li class="mt-2" style=" margin-left:  20px;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong>ADMINISTRATION BASE DE DONNEE</strong>
                         <br>
                         <div class="concate"> Conception de base de donnée, anticiper les volumes de donnée à stocker, créer des dictionnaires de données,
                             contrôler le bon fonctionnement des progiciels de système de leur gestion, effectuer les mises à jour et mettre un
                             système de veille technologique en place., .</div>

                     </li>

                     <li class="mt-2" style=" margin-left:  20px;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong>ADMINISTRATION DE SYSTEME D'INFORMATION </strong>
                         <br>
                         <div class="concate"> gestion et création de compte utilisateur.</div>

                     </li>

                     <li class="mt-2" style=" margin-left:  20px;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong>ADMINISTRATION VISIOCONFERENCE</strong>
                         <br>
                         <div class="concate"> Installation et configuration, préparation de salle de Visio-conférence Zoom, Webex, Skype...</div>

                     </li>

                     <li class="mt-2" style=" margin-left:  20px;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong>MAINTENANCE INFORMATIQUE</strong>
                         <br>
                         <div class="concate"> Installation de système d'exploitation, Configuration, paramétrage, entretien, répérage de pièce déffayant ect...</div>

                     </li>



                     <li class="mt-2" style=" margin-left:  20px;">
                         <i class="fa fa-check-circle" style="color: red;"></i>
                         <strong>PAQUE OFFICE</strong>
                         <br>
                         <div class="concate"> WORD, ACCESS, OFFICE EXCEL, AGENDA, OUTLOOK et POWER POINT)..</div>

                     </li>

                 </div>
                 <!-- COMPETENCES II -->
                 <div class="col-xs-12 col-sm-6  ">
                     <h4>Compétences en Développement </h4>
                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 120px; position: absolute; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top: 5px; margin-left: 10px; position: absolute;">
                                     <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> - <abbr title="Cascading Style Sheets" class="initialism">CSS</abbr></p>
                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 80%; " aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </p>

                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 200px; position: absolute; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top:  5px; margin-left: 10px; position: absolute;">
                                     <p><abbr title="Hypertext Preprocessor" class="initialism">PHP</abbr> - PHPMYADMIN</p>
                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 60%; " aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
                         </div>
                     </p>

                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 135px; position: absolute;; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top: 5px; margin-left: 10px; position: absolute;">
                                     <p><abbr title="My structured query language" class="initialism">MYSQL</abbr>
                                         - <abbr title="Structured Query Language" class="initialism">SQL</abbr>
                                     </p>

                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 65%; " aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </p>
                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 110px; position: absolute;; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top: 5px; margin-left: 10px; position: absolute;">
                                     LARAVEL
                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 75%; " aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </p>
                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 135px; position: absolute;; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top: 5px; margin-left: 10px; position: absolute;">
                                     BOOTSTRAP
                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 85%; " aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </p>

                     <!-- COMPETENCES -->


                     <h4 class="mt-4">Compétences en Conception Graphique </h4>

                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 140px; position: absolute;; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top: 5px; margin-left: 10px; position: absolute;">
                                     WORDPRESS
                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger active" role="progressbar" style="width: 70%; " aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </p>
                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 110px; position: absolute;; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top: 5px; margin-left: 10px; position: absolute;">
                                     ANIMATE
                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger active" role="progressbar" style="width: 55%; " aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </p>
                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 135px; position: absolute;; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top: 5px; margin-left: 10px; position: absolute;">
                                     PHOTOSHOP
                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 70%; " aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </p>
                     <p class="mt-4">

                         <div class="progress" style="height: 40px; border-radius: 0px;">

                             <div class="" style="height: 40px; width: 150px; position: absolute;; background-color: rgba(255, 255, 255, 0.438);">
                                 <label class="" style="font-size: 20px; margin-top: 5px; margin-left: 10px; position: absolute;">
                                     ILLUSTRATOR
                                 </label>
                             </div>
                             <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 60%; " aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                     </p>


                 </div>
             </div>
         </div>

         <div class="container mt-5 bg-secondary " style="height: 100px; "></div>
     </section>


     <!-- END ZONE COMPETENCES-->


     <!-- Diviseur -->
     <section class="sec4 container-fluid  text-center bg-secondary " style="margin-top: 100px;">

         <div class=" container-fluid pt-3">
             <p class=" text-white text2 " style="font-size: 45px;">
                 <i class="fa fa-quote-left"></i>
                 Je suis prêt à répondre à tout besoin que vous souhaiterez me soumettre
                 <i class="fa fa-quote-right p-4"></i>

             </p>
         </div>
     </section>

     <!-- ZONE DIPLOMES -->

     <div class=" " id="JNsnIJ59S?238KnkIh5DiPl"></div>
     <!-- ZONE DIPLOMES -->
     <section class="sec2">

         <!-- DIPLIMES -->
         <nav class="container-fluid p-5" aria-label="breadcrumb">
             <div class="titre">
                 <p class="titre-Projet ">MES DIPLÔMES</p>
                 <p class="sous-titre P-1">Mon parcours scolaire.</p>
                 <div class="souligne"></div>
             </div>

             <!-- ENSEMBLE DE DIPLIMES -->


             <!-- DIPLIMES PC lg-->
             <div class="container d-none d-md-block d-md-none mt-5">

                 <!-- MASTER 1 -->
                 <div class=" row mt-5">

                     <div class="dateDipl col-sm-2 ">
                         <div class=" BulleDate shadow-lg ">
                             <p class="AnneeDiploLxLg">2019</p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text shadow">
                             <h2>MASTER 1</h2>
                             <hr>
                             <p> Master Génie Informatique et Réseaux (MAGIR)
                                 <br /> <b>PIGIER CI (UNIVERSITE DES METIERS)</b>
                             </p>
                         </div>
                     </div>
                 </div>


                 <!-- L3 -->
                 <div class=" row mt-5">

                     <div class="dateDipl col-sm-2 ">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeDiploLxLg"> 2018</p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text shadow">
                             <h2>LICENCE PRO</h2>
                             <hr>
                             <p> Réseaux et Génie Logiciel (R.G.L)
                                 <br /> <b>PIGIER CI (UNIVERSITE DES METIERS</b>
                             </p>
                         </div>
                     </div>
                 </div>

                 <!-- BTS -->
                 <div class=" row mt-5">

                     <div class="dateDipl col-sm-2 ">
                         <div class="BulleDate shadow-lg  ">
                             <p class="AnneeDiploLxLg"> 2017</p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text shadow ">
                             <h2>B.T.S</h2>
                             <hr>
                             <p> Informatique et Développeur d’Applicatio (I.D.A)
                                 <br /> <b>PIGIER CI (UNIVERSITE DES METIERS</b>
                             </p>
                         </div>
                     </div>
                 </div>



                 <!-- DUT -->
                 <div class=" row mt-5">

                     <div class="dateDipl col-sm-2 ">
                         <div class="BulleDate shadow-lg">
                             <p class="AnneeDiploLxLg"> 2017</p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text shadow">
                             <h2>D.U.T</h2>
                             <hr>
                             <p>Mention Assez-Bien, IDA(Informatique et Développeur d’Application)<br /> <b>Cour Supérieur Saint Pierre-Marcory</b>
                             </p>
                         </div>
                     </div>
                 </div>

                 <!-- CERTIFICAT EXCEL -->
                 <div class=" row mt-5">

                     <div class="dateDipl col-sm-2 ">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeDiploLxLg"> 2016</p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text shadow">
                             <h2>CERTIFIE EXCEL</h2>
                             <hr>
                             <p>MICROSOFT OFFICE EXCEL 2010 <br />Code de vérification: <b>wYEkQ-2uza</b></p>
                         </div>
                     </div>
                 </div>

                 <!-- BAC -->
                 <div class=" row mt-5">

                     <div class="dateDipl col-sm-2 ">
                         <div class=" BulleDate shadow-lg ">
                             <p class="AnneeDiploLxLg"> 2015</p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text shadow">
                             <h2>B A C C A L A U R E A T</h2>
                             <hr>
                             <p>Série D <br />Science Expérimentale </p>
                         </div>
                     </div>
                 </div>


             </div>





             <!-- DIPLIMES MOBILE  sm xs-->
             <div class="container  d-lg-none d-md-none  d-xl-none mt-5">


                 <!-- MASTER -->
                 <div class=" row mt-5 ">
                     <div class="dateDipl  col-ms-4">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeDiplo">2019</p>
                         </div>
                     </div>

                     <div class="bubble  col-md-8 ">
                         <div class="bubble-text-mobil shadow col-md-8">
                             <h2>MASTER 1</h2>
                             <hr>
                             <p> Master Génie Informatique et Réseaux
                                 <br /> <b>PIGIER CI (UNIVERSITE DES METIERS)</b>
                             </p>
                         </div>
                     </div>
                 </div>

                 <!-- LICIENCE -->
                 <div class=" row mt-5">
                     <div class="dateDipl col-ms-4">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeDiplo">2018</p>
                         </div>
                     </div>

                     <div class="bubble  col-md-8">
                         <div class="bubble-text-mobil shadow col-md-8">
                             <h2>LICENCE PRO</h2>
                             <hr>
                             <p> Lience 3 Réseaux et Génie Logiciel (R.G.L)
                                 <br /> <b>PIGIER CI (UNIVERSITE DES METIERS)</b>
                             </p>
                         </div>
                     </div>
                 </div>

                 <!-- BTS -->
                 <div class=" row mt-5">
                     <div class="dateDipl col-ms-4">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeDiplo">2017</p>
                         </div>
                     </div>

                     <div class="bubble  col-md-8">
                         <div class="bubble-text-mobil shadow col-md-8">
                             <h2>B.T.S</h2>
                             <hr>
                             <p> Licence 2 Informatique et Développeur d’Application (I.D.A)
                                 <br /> <b>PIGIER CI (UNIVERSITE DES METIERS)</b>
                             </p>
                         </div>
                     </div>
                 </div>

                 <!-- DUT -->
                 <div class=" row mt-5">
                     <div class="dateDipl col-ms-4">
                         <div class="BulleDate shadow-lg  ">
                             <p class="AnneeDiplo">2017</p>
                         </div>
                     </div>

                     <div class="bubble col-md-8">
                         <div class="bubble-text-mobil shadow col-md-8">
                             <h2>D.U.T</h2>
                             <hr>
                             <p>Mention Assez-Bien, IDA(Informatique et Développeur d’Application)<br />
                                 <b>Cour Supérieur Saint Pierre-Marcory</b>
                             </p>
                         </div>
                     </div>
                 </div>

                 <!-- CERTIF EXCEL -->
                 <div class=" row mt-5">
                     <div class="dateDipl col-ms-4">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeDiplo">2016</p>
                         </div>
                     </div>

                     <div class="bubble col-md-8">
                         <div class="bubble-text-mobil shadow col-md-8">
                             <h2>CERTIFIE EXCEL</h2>
                             <hr>
                             <p>Licience 1 MICROSOFT OFFICE EXCEL 2010 <br />Code de vérification: <b>wYEkQ-2uza</b></p>
                         </div>
                     </div>
                 </div>

                 <!-- BAC -->
                 <div class=" row mt-5">
                     <div class="dateDipl col-ms-4">
                         <div class="BulleDate shadow-lg  ">
                             <p class="AnneeDiplo"> 2015</p>

                         </div>
                     </div>

                     <div class="bubble col-md-8">
                         <div class="bubble-text-mobil shadow col-md-8">
                             <h2> B A C C A L A U R E A T</h2>
                             <hr>
                             <p>Série D <br />Science Expérimentale </p>
                         </div>
                     </div>
                 </div>
             </div>

         </nav>
     </section>


     <!-- Diviseur -->
     <section class="sec4 container-fluid  text-center bg-secondary " style="margin-top: 00px;">

         <div class=" container-fluid pt-3">
             <p class=" text-white text2 " style="font-size: 45px;">
                 <i class="fa fa-quote-left"></i>
                 Je suis prêt à répondre à tout besoin que vous souhaiterez me soumettre
                 <i class="fa fa-quote-right p-4"></i>

             </p>
         </div>
     </section>


     <!-- ZONE EXPERIENCES -->

     <div class=" " id="JHbshJJbs2869sVX3ExP"></div>
     <!-- ZONE EXPERIENCES -->
     <section class="sec2">

         <!-- EXPERIENCES -->
         <nav class="container-fluid p-5" aria-label="breadcrumb">
             <div class="titre">
                 <p class="titre-Projet ">MES EXPERIENCES</p>
                 <p class="sous-titre P-1">Mon parcours professionnel et mes associations</p>
                 <div class="souligne"></div>
             </div>

             <!-- EXPERIENCES PC lg-->
             <div class="container d-none d-md-block d-md-none mt-5">

                 <!-- MSHP-->
                 <div class=" row mt-5">

                     <div class="dateExp col-sm-2 ">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeExpLxLg">Today </p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text-Exp shadow">
                             <h2>Ministère de la Santé et de l'Hygiène Publique</h2>
                             <hr>
                             <p> <b>ASSISTANT INFORMATICIEN DU COORDINATEUR E-SANTE (CNDTIC)</b>
                                 <br />
                                 Charger d'assister le coordinateur en chef de la E-sante sur tous
                                 les projets d'informatisation et de conception informatique dans le
                                 cadre de la E-sante.
                             </p>
                         </div>
                     </div>
                 </div>



                 <!-- Mimoye Finance-->
                 <div class=" row mt-5">

                     <div class="dateExp col-sm-2 ">
                         <div class="BulleDate shadow-lg " style="">
                             <p class="AnneeExpLxLg">2017</p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text-Exp shadow">
                             <h2>MIMOYE FINANCE</h2>
                             <hr>
                             <p> <b>STAGE PRATIQUE</b>
                                 <br />
                                 Charger d'assister le personnels et de la gestion du système informatique.
                             </p>
                         </div>
                     </div>
                 </div>


                 <!-- Easy Tech-->
                 <div class=" row mt-5">

                     <div class="dateExp col-sm-2 ">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeExpLxLg">2017</p>

                         </div>
                     </div>

                     <div class="bubble col ">
                         <div class="bubble-text-Exp shadow">
                             <h2>EASY TECHNOLOGIE</h2>
                             <hr>
                             <p> <b>STAGE PRATIQUE</b>
                                 <br />
                                 Charger d'assister le personnels et de la gestion du système informatique.
                             </p>
                         </div>
                     </div>
                 </div>


             </div>


             <!-- EXPERIENCES MOBILE sm xs-->
             <div class="container  d-lg-none d-md-none  d-xl-none mt-5">


                 <!-- MSHP -->
                 <div class=" row mt-5 ">
                     <div class="dateExp  col-ms-4">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeExp">2019</p>
                         </div>
                     </div>

                     <div class="bubble col-md-8 ">
                         <div class="bubble-text-mobil-Exp shadow col-md-8">
                             <h2>Ministère de la Santé et de l'Hygiène Publique</h2>
                             <hr>
                             <p> <b>ASSISTANT INFORMATICIEN DU COORDINATEUR E-SANTE (CNDTIC)</b>
                                 <br />
                                 Charger d'assister le coordinateur en chef de la E-sante sur tous
                                 les projets d'informatisation et de conception informatique dans le
                                 cadre de la E-sante.

                             </p>
                         </div>
                     </div>
                 </div>


                 <!-- Mimoye Fin -->
                 <div class=" row mt-5 ">
                     <div class="dateExp  col-ms-4">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeExp">2019</p>
                         </div>
                     </div>

                     <div class="bubble col-md-8 ">
                         <div class="bubble-text-mobil-Exp shadow col-md-8">
                             <h2>MIMOYE FINANCE</h2>
                             <hr>
                             <p> <b>STAGE PRATIQUE</b>
                                 <br />
                                 Charger d'assister le personnels et de la gestion du système informatique.
                             </p>
                         </div>
                     </div>
                 </div>


                 <!-- Easy Techno -->
                 <div class=" row mt-5 ">
                     <div class="dateExp  col-ms-4">
                         <div class="BulleDate shadow-lg ">
                             <p class="AnneeExp">2019</p>
                         </div>
                     </div>

                     <div class="bubble col-md-8 ">
                         <div class="bubble-text-mobil-Exp shadow col-md-8">
                             <h2>EASY TECHNOLOGIE</h2>
                             <hr>
                             <p> <b>STAGE PRATIQUE</b>
                                 <br />
                                 Charger d'assister le personnels et de la gestion du système informatique.
                             </p>
                         </div>
                     </div>
                 </div>


             </div>

         </nav>


         <!-- MES EXPERIENCES -->
     </section>




     <!-- Diviseur -->
     <section class="sec4 container-fluid  text-center bg-secondary " style="margin-top: 00px;">

         <div class=" container-fluid pt-3">
             <p class=" text-white text2 " style="font-size: 45px;">
                 <i class="fa fa-quote-left"></i>


                 <i class="fa fa-quote-right p-4"></i>

             </p>
         </div>
     </section>


     <!-- ZONE PROJETS-->

     <div class="menu-portfolio mt-5 " id="Por695JSkNnskOSBXYv"></div>


     <section class="sec0-port ">

         <!-- Projet réalisé-->
         <nav class="container" aria-label="breadcrumb">
             <div class="titre">
                 <p class="titre-Projet ">MES PROJETS</p>
                 <p class="sous-titre P-1">Une partie de tous les projets sur lesquels j'ai travaillé</p>
                 <div class="souligne"></div>
             </div>
         </nav>

         <div class="container p-5">
             <div class=" row ">
                 <div class="col-lg mb-4 card border-white ">

                     <a href="#" class="">
                         <div class="card shadow-sm">

                             <img src="images/ecran1.png" class="card-img-top " alt="...">

                     </a>
                     <div class="card-body ">
                         <h5 class="card-title ">CABINET IDAEL SARL</h5>
                         <p class="card-text">Dévéloppement Web</p>
                     </div>
                 </div>

             </div>

             <div class="col-lg mb-4 card border-white">

                 <a href="#" class="">
                     <div class="card shadow-sm">

                         <img src="images/ecran2.png" class="card-img-top" alt="...">

                 </a>
                 <div class="card-body ">
                     <h5 class="card-title">CENTRE MEDICAL P.A.A</h5>
                     <p class="card-text">Dévéloppement Web</p>
                 </div>
             </div>

         </div>
         <div class=" col-lg mb-4 card border-white">

             <a href="#" class="">
                 <div class="card shadow-sm">

                     <img src="images/ecran3.png" class="card-img-top" alt="...">

             </a>
             <div class="card-body ">
                 <h5 class="card-title">GOODFOOD </h5>
                 <p class="card-text">Dévéloppement Web</p>
             </div>
         </div>

         </div>

         </div>


     </section>

     <!-- Diviseur -->
     <section class="sec4 container-fluid  text-center bg-secondary " style="margin-top: 100px;">

         <div class=" container-fluid pt-3">
             <p class=" text-white text2 " style="font-size: 45px;">
                 <i class="fa fa-quote-left"></i>


                 <i class="fa fa-quote-right p-4"></i>

             </p>
         </div>
     </section>







     <div class=" bg-danger" id="747JNSjNvsgSOBCoNTdx"></div>
     <!-- ZONE CONTACTS-->
     <section class="sec2 ">

         <!-- Sous titre-->
         <nav class="container-fluid p-5 " aria-label="breadcrumb">
             <div class="titre">
                 <p class="titre-Projet ">CONTACTEZ-MOI</p>
                 <p class="sous-titre P-1"></p>
                 <div class="souligne"></div>
             </div>
         </nav>

         <div class="container mt-5" style="max-width: 70%;">


             <div class="row d-md-block d-md-none justify-content-lg-center">
                 <!-- ZONE COMPETENCES-->
                 <div class="row">

                     <div class=" col-lg col-lg-3 mb-4">

                         <div class="media mb-2">

                             <i class="fa fa-briefcase fa-2x fa-color"></i>
                             <div class="media-body border-bottom ml-3">
                                 <h3 class="mb-0">Travail </h3>
                                 <p>Tour C, 16ème étage, cité administative Plateau </br>
                                     CABINET - Ministère de la Santé et d'Hygiène Publique
                                 </p>

                             </div>
                         </div>

                         <div class="media mb-2">
                             <i class="fa fa-phone fa-2x fa-color"></i>
                             <div class="media-body border-bottom ml-3">
                                 <h3 class="mb-0">Téléphone</h3>
                                 <p>Tel 1: 08.60.26.21 </br>
                                     Tel 2: 57.55.52.76</p>

                             </div>
                         </div>

                         <div class="media mb-2">

                             <i class="fa fa-envelope fa-2x fa-color"></i>
                             <div class="media-body border-bottom ml-3">
                                 <h3 class="mb-0">E-mail</h3>
                                 <p>Pro: l.djedjro@sante.gouv.ci </br>
                                     Perso: isaacdjedjro@gmail.com
                                 </p>

                             </div>
                         </div>

                         <div class="media mb-2">

                             <i class="fa fa-road fa-2x fa-color"></i>
                             <div class="media-body border-bottom ml-3">
                                 <h3 class="mb-0">Adresse Postale</h3>
                                 <p>11 BP 1971 ABIDJAN 11</p>

                             </div>
                         </div>

                         <div class="media mb-2">

                             <i class="fa fa-map-marker fa-2x fa-color"></i>
                             <div class="media-body  ml-3">
                                 <h3 class="mb-0">Habitation</h3>
                                 <p>Marcory champroux, cité SACI lot n°7</p>

                             </div>
                         </div>


                     </div>
                     <div class=" col-lg col-lg-4 mb-4">
                         <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1vm5zf900NGCpiGtTFlfbowQqVPkm5hkQ" width="100%" height="600px" style="position: relative; border: 0.0000000px;"></iframe>
                     </div>



                     <div class=" col-lg col-lg-5 ">




                         <form action="index.php#747JNSjNvsgSOBCoNTdx" method="POST" name="contact" id="contact" onsubmit="">


                             <?php

                                if (isset($contact) && $contact == "") {

                                    echo '<div class="alert alert-success alert-dismissible fade show " >
                                                Voulez-vous me contacter ? Ecrivez-moi !
                                                                            </div>';
                                }


                                if (isset($_POST["email"])) {

                                    $name = $_POST["name"];
                                    $sujet = $_POST["sujet"];
                                    $phone = $_POST["phone"];
                                    $EmailExp = $_POST["email"];
                                    $valider = $_POST["valider"];



                                    $EmailDest = 'djedjroisaac@gmail.com';
                                    $headers = 'Content-Type: text/html;\n';
                                    $headers .= 'FROM : ' . $EmailExp;

                                    $message = utf8_decode($_POST['message']) . "\r\n";
                                    $message = "<strong>De : " . $EmailExp . "<br /> Nom : " . $name .
                                        "<br /> Tel : " . $phone . "<br /><br /> Sujet : " . $sujet .
                                        "<br /><br /><center> Message : <br /><br />  " . $message . "\r\n<center/>";
                                    $message = " <html><body>" . $message . "<body/><html />";











                                    $reussi = mail($EmailDest, $sujet,  $message, $headers);





                                    if (mail($EmailDest, $sujet, $message, $headers)) {

                                        if (isset($reussi) && $reussi == 1) {

                                            echo '  
                                                                            <div class="alert alert-success alert-dismissible fade show " role="alert">
                                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                                Votre message a bien été envoyé <strong>' . $name . '<strong/>!
                                                                            </div>
                                                                                                        
                                                    ';
                                        } else {
                                            echo '   

                                                                            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                                Echec de l\'envoi de votre message <strong>' . $name . '<strong/> !
                                                                            </div>
                                                                                                        
                                                                        ';
                                        }
                                    }
                                }

                                ?>





                             <div class="form-group">

                                 <label class="" for="validationCustom01">Voulez-vous me contacter ? Ecrivez-moi.</label>
                                 <div class="input-group-prepend ">
                                     <div class="input-group-text formInfoCont justify-content-center"><i class="fa fa-user fa-color"></i></div>
                                     <input type="text" name="name" class="form-control formInfoCham" id="validationCustom01" placeholder="Entreprise / Individu" required>

                                     <div class="input-group-text formInfoCont justify-content-center" style="color: red;"> *</div>
                                 </div>




                                 <div class="form-group mt-3">
                                     <div class="input-group-prepend ">
                                         <div class="input-group-text formInfoCont justify-content-center"><i class="fa fa-envelope fa-color"></i></div>

                                         <input type="email" name="email" class="form-control formInfoCham" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required>
                                         <div class="input-group-text formInfoCont justify-content-center" style="color: red;"> *</div>
                                         <small id="emailHelp" class="form-text text-muted"></small>
                                     </div>
                                 </div>



                                 <div class="form-group mt-3">
                                     <div class="input-group-prepend ">
                                         <div class="input-group-text formInfoCont justify-content-center"><i class="fa fa-phone fa-color"></i></div>
                                         <input type="text" name="phone" class="form-control formInfoCham" id="validationCustom01" placeholder="Téléphone">

                                         <div class="input-group-text formInfoCont justify-content-center" style="color: red;"> </div>
                                     </div>

                                 </div>


                                 <div class="form-group mt-3">
                                     <div class="input-group-prepend ">
                                         <div class="input-group-text formInfoCont justify-content-center"><i class="fa fa-pencil fa-color"></i></div>
                                         <input type="text" name="sujet" class="form-control formInfoCham" id="validationCustom01" placeholder="Sujet" required>

                                         <div class="input-group-text formInfoCont justify-content-center" style="color: red;"> *</div>
                                     </div>
                                 </div>



                                 <div class="input-group mt-3">

                                     <textarea class="form-control rounded-0" name="message" placeholder="Ecrivez-moi un message ici." aria-label="With textarea" rows="5" required></textarea>
                                     <div class="input-group-prepend">
                                         <span class="input-group-text justify-content-center formZoneTex"><i class="fa fa-pencil-square-o fa-2x fa-color"></i></span>
                                     </div>
                                 </div>

                                 <div class="g-recaptcha mt-3" data-sitekey="6LdxefMUAAAAAFLpfcDygnrzFPQM0Y8yi6Dx8oHu" require></div>
                                 <br />

                                 <div class="">
                                     <button class=" btn btn-outline-danger" name="valider" onclick="checkRecaptcha()" value="submit" style="height: 50px; width: 100px;">Envoyer</button>
                                 </div>


                             </div>
                         </form>
                     </div>


                 </div>
             </div>


         </div>



     </section>


     <!-- Diviseur -->
     <section class="sec4 container-fluid  text-center" style="margin-top: 100px;">

         <div class=" container-fluid pt-3">
             <p class=" text-white text2 " style="font-size: 45px;">
                 <i class="fa fa-quote-left"></i>


                 <i class="fa fa-quote-right p-4"></i>

             </p>
         </div>
     </section>


     <!-- Retourner à l'accueil -->

     <div class=" MountTop d-none d-sm-block" style="z-index: 1000;">

         <div class=" mount_accueil " style="z-index: 1000;">
             <a href="#Ac85DpJgVnKJ???bB" class="">
                 <i class="fa fa-angle-double-up fa-color fa-2x " style="height: 50px; width: 50px; margin-top: 12px; z-index: 1000000000;"></i>
             </a>

         </div>


     </div>
     <!-- Script navbar change scroll 
                        <script>
                            $(window).scroll(function () {
                                $('div').toggleClass('scrolled', $(this).scrollTop() > 2600);
                            });

                        </script>
                        <script>
                            $(window).scroll(function () {
                                $('div').toggleClass('scrolled', $(this).scrollTop() > 2600);
                            });

     </script>-->








     <!-- BAS DE PAGE -->
     <footer>
         <div class="" style="background-color: #1e1e24;">


             <div class=" p-4  bas_de_page">


                 <div class=" container justify-content-center ">

                     <!-- LOGO DEE -->

                     <div class=" " style="position: absolute;">
                         <a class=" justify-content-center" href="" style="">
                             <img src="images/logo.png" width="70px" height="70px" alt="Logo" class="  border border-white rounded-circle">
                         </a>

                     </div>
                     <!-- Twitter-->
                     <div class=" divons_twi" style="">
                         <a href="#" class="social"><img src="images/twitter.png" alt="social" />
                             <div class="fond_twitter"></div>
                         </a>

                     </div>

                     <!-- FACEBOOK -->
                     <div class="divons_face " style="">
                         <a href="#" class="social"><img src="images/face.png" alt="social" />
                             <div class="fond_face"></div>
                         </a>
                     </div>

                     <!--INSTAGRAM -->
                     <div class=" divons_insta" style="">
                         <a href="#" class="social"><img src="images/instag.png" alt="social" />
                             <div class="fond_insta"></div>
                         </a>

                     </div>

                     <!--    -->
                     <div class=" divons_youtube" style="">
                         <a href="#" class="social"><img src="images/face.png" alt="social" />
                             <div class="fond_youtube"></div>
                         </a>

                     </div>


                 </div>


             </div>

             <div class=" container pt-3 mb-0  div_footer">
                 <div class=" row">
                     <div class=" col-lg col-lg-8">
                         <h4 class="">Développeur Informatique Indépendant</h4>

                         <p> Développeur Web front & Webdesigner freelance, je suis à votre disposition pour </br>
                             répondre à tout type de projets de création de sites internet, de développement </br>
                             spécifique ou d'applications web.</p>

                         <p>Passionné par les technologies liées au Web, je mets mes compétences au </br>
                             service de vos besoins dans divers domaines.
                         </p>



                     </div>
                     <div class=" col-lg col-lg-4">

                         <div class="media">


                             <div class="media-body">
                                 <h4 class="">Isaac DJEDJRO</h4>
                                 <p class=""><i class="fa fa-home pr-2"></i> Marcory champroux, cité SACI lot n°7 </br>
                                     <i class="fa fa-phone pr-2"></i> +(225) 08 60 26 21 </br>
                                     <i class="fa fa-envelope pr-2"></i> l.djedjro@sante.gouv.ci /
                                     isaacdjedjro@gmail.com</br>
                                     <i class="fa fa-link pr-2"></i> www.isaacdjedjro.ci </br>
                                 </p>

                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>


         <div class=" pt-4 text-center bas_de_page">
             <a href="">
                 <font color="#C9CACA">M. Djedjro</font>
             </a>
             <font color="lightslategrey">Copyright</font>
             <font color="#C9CACA">©</font>
             <font color="lightslategrey">2019-2020</font>
         </div>
     </footer>

     <!-- END BAS DE PAGE -->







     <!-- Optional JavaScript -->

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





     <script type="text/javascript" src="loader.js"></script>


     <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

     


    //  <script type="text/javascript">
    //      $(window).load(function() {
    //          $(".loader").fadeOut("0");
    //      })
    //  </script> -->




     <!-- Script Sweet Alert -->
     <script src="sweetalert2.all.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


     <SCRIPT LANGUAGE="JavaScript">
         function checkRecaptcha() {

             const Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                 timer: 3000,
                 timerProgressBar: true,
                 onOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                 }
             })

             Toast.fire({
                 icon: 'success',
                 title: 'Bienvenue sur mon portfolio !'
             })
         }
     </SCRIPT>






     <!-- Script reCAPTCHA-->

     <script>
         function checkRecaptcha() {

             var response = grecaptcha.getResponse();

             if (response.length == 0) {
                 //reCaptcha not verified

                 Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Veuillez remplir les champs obligatoires S.V.P',
                 })
             }
         }
         // implement on the backend
         function backend_API_challenge() {
             var response = grecaptcha.getResponse();
             $.ajax({
                 type: "POST",
                 url: 'https://www.google.com/recaptcha/api/siteverify',
                 data: {
                     "secret": "6LdxefMUAAAAAB4a6vQYf_jdijaTdxrHQmEr8qXJ",
                     "response": response,
                     "remoteip": "localhost"
                 },
                 contentType: 'application/x-www-form-urlencoded',
                 success: function(data) {
                     console.log(data);
                 }
             });
         }
     </script>





     <!-- Script Link animate -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css"></script>


     <script>
         var wow = new WOW({
             boxClass: 'wow', // animated element css class (default is wow)
             animateClass: 'animated', // animation css class (default is animated)
             offset: 0, // distance to the element when triggering the animation (default is 0)
             mobile: true, // trigger animations on mobile devices (default is true)
             live: true, // act on asynchronously loaded content (default is true)
             callback: function(box) {
                 // the callback is fired every time an animation is started
                 // the argument that is passed in is the DOM node being animated
             },
             scrollContainer: null, // optional scroll container selector, otherwise use window,
             resetAnimation: true, // reset animation on end (default is true)
         });
         wow.init();
     </script>


     <!-- Script navbar change scroll -->
     <script>
         $(window).scroll(function() {
             $('nav').toggleClass('scrolled', $(this).scrollTop() > 90);
         });
     </script>
     <script>
         $(window).scroll(function() {
             $('nav').toggleClass('scrolled', $(this).scrollTop() > 90);
         });
     </script>


     <!-- Script Dropdown show on survol -->
     <script>
         const $dropdown = $(".dropdown");
         const $dropdownToggle = $(".dropdown-toggle");
         const $dropdownMenu = $(".dropdown-menu");
         const showClass = "show";

         $(window).on("load resize", function() {
             if (this.matchMedia("(min-width: 768px)").matches) {
                 $dropdown.hover(
                     function() {
                         const $this = $(this);
                         $this.addClass(showClass);
                         $this.find($dropdownToggle).attr("aria-expanded", "true");
                         $this.find($dropdownMenu).addClass(showClass);
                     },
                     function() {
                         const $this = $(this);
                         $this.removeClass(showClass);
                         $this.find($dropdownToggle).attr("aria-expanded", "false");
                         $this.find($dropdownMenu).removeClass(showClass);
                     }
                 );
             } else {
                 $dropdown.off("mouseenter mouseleave");
             }
         });
     </script>


 </body>



 </html>