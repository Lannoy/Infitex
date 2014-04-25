<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Infitex</title>
        <link rel="stylesheet" href="WebContent/css/foundation.min.css" />
        <link rel="stylesheet" href="WebContent/css/style.css" /> 
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dosis">
        <script src="WebContent/js/vendor/modernizr.js"></script>
    </head>
<body>  
    <?php include('Pages/header.php'); ?>

    <!-- Diaporama -->
    <ul class="example-orbit" data-orbit>
        <li>
            <img src="WebContent/img/index/fond-slider_1.png" alt="slide 1"/>
        </li>
        <li class="active">
            <img src="WebContent/img/index/fond-slider_2.png" alt="slide 2"/>
        </li>
        <li>
            <img src="WebContent/img/index/fond-slider_3.png" alt="slide 3"/>
        </li>
       <li>
            <img src="WebContent/img/index/fond-slider_3.png" alt="slide 4"/>
        </li>
    </ul>

    <!-- Activités principales -->
    <div class="activity_margin">
        <div class="row">
            <div class="large-4 medium-6 small-12 columns text-center bloc left">
               <img src="WebContent/img/index/icon-as400-g.png" alt="as400" class="service_icon"/>
                <h3>Développement AS/400 (iSeries)</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>           
            <div class="large-4 medium-6 small-12 columns text-center bloc">
                <img src="WebContent/img/index/icon-hp_reseau-g.png" alt="reseau" class="service_icon" />
                <h3>Infrastructures réseaux</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="large-4 medium-12 small-12 columns text-center bloc end">
                <img src="WebContent/img/index/icon-hp_web-g.png" alt="web" class="service_icon" />
                <h3>Création de site web</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>      
        </div>        
    </div>

     <!-- Petite présentation -->
    <div class="offwhite">
        <div class="row presentation">
            <div class="text-center">
                <h4>
                    Forte d'une expérience de plus de 25 ans, INFITEX est aujourd'hui une SSII (Société de Service en Ingénierie Informatique) aux multiples compétences.
                </h4>
                <p>
                    INFITEX est avant tout spécialisée dans les domaines de la gestion et de la communication de la gamme des mini-ordinateurs IBM Series (AS/400). Cette expertise lui permet de proposer bien d'autres solutions autour des systèmes d'informations comme la gestion des infrastructures réseaux ou encore la création de site internet sur-mesure.
                </p>
                <a href="#" class="small radius button presentation_button_margin">EN SAVOIR PLUS</a>                
            </div>
        </div>
    </div>

    <!-- Actualités -->
    <div class="navyblue">
        <div class="row">
            <h4 class="text-center actu_title white_color">NOS DERNI&EgraveRES ACTUALIT&EacuteS</h4>
        </div>
        <div class="row">
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4 text-center columns">
                <li class="actu">
                   <img src="WebContent/img/index/actu1.png" alt="actu1"/>
                    <div class="annotation_wrap">
                        <p class="annotation_title white_color">Infitex s'installe à la Haute-Borne !</p>
                    </div>
                </li>
                <li class="actu">
                    <img src="WebContent/img/index/actu4.png" alt="actu4"/>
                    <div class="annotation_wrap">
                        <p class="annotation_title white_color">Fin du support Windows XP le 8 Avril !</p>
                    </div>
                </li>
                <li class="actu">
                    <img src="WebContent/img/index/actu3.png" alt="actu3"/>
                    <div class="annotation_wrap">
                        <p class="annotation_title white_color">Découvrez la nouvelle gamme Lexmark</p>
                    </div>
                </li>
                <li class="actu">
                    <img src="WebContent/img/index/actu2.png" alt="actu2"/>
                    <div class="annotation_wrap">
                        <p class="annotation_title white_color">eOlymp mobilité : Olymp version mobile !</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Site internet -->
    <div>
        <div class="website_margin">
            <div class="row">
                <h2 class="site_title text-center">Infitex réalise votre site <strong>internet sur mesure!</strong></h2>
            </div>        
        </div>

        <div class="row">
            <div class="large-6 medium-12 small-12 text-center columns">
                <img src="WebContent/img/index/creation-web.png" alt="creationWeb"/>
            </div>
            <div class="large-6 medium-12 small-12 text-center columns">
                <img src="WebContent/img/index/fond-slider_design.png" class="left website_icon_margin"/>
                <div class="site_tooltip">
                    <h5><strong>Création de charte graphique</strong></h5>
                    <p>Grâce à l'étude de vos supports de communication et à l'écoute de vos besoins, nos webdesigners créent un site web à l'image de l'entreprise.</p>                        
                </div>
            </div>

            <div class="large-6 medium-12 small-12 text-center columns">
                <img src="WebContent/img/index/fond-slider_mobile.png" class="left website_icon_margin"/>
                <div class="site_tooltip">
                    <h5><strong>Pour tous les écrans</strong></h5>
                    <p>Nos programmeurs utilisent les dernières technologies en matière de webdesign pour rendre votre site internet compatible sur tous les supports.</p>                        
                </div>
            </div>

            <div class="large-6 medium-12 small-12 text-center columns">
                <img src="WebContent/img/index/fond-slider_logiciel.png" class="left website_icon_margin">
                <div class="site_tooltip">
                    <h5><strong>Intégrer à votre environnement logiciel</strong></h5>
                    <p>Infitex crée des site webs en intégration direct avec l'ERP Olymp ou tout autre solution logiciel pour optimiser au mieux vos systèmes d'information.</p>                        
                </div>
            </div>
        </div>

        <div class="row">
            <div class="columns text-center">
                <a href="#" class="small radius button grey">NOS REFERENCES WEB</a>
                <a href="#" class="small radius button website_button_margin">EN SAVOIR PLUS</a>           
            </div>
        </div>
    </div>

    <?php
        include('Pages/footer.php');
    ?>
    <script src="WebContent/js/vendor/jquery.js"></script>
    <script src="WebContent/js/foundation.min.js"></script>
    <script src="WebContent/js/app.js"></script>
  </body>
</html>