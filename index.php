<?php
include_ONCE 'divers/head.php';
?>
<meta name="description" content="Disc-Hif, pour vivre votre musique !" />
<title>Disc-Hifi</title>
</head>
<body>
    <!---__________________-__________________--->
    <header class="header" id="index" style="background-image:url(img/header/bg-headphone.jpg);">
        <div class="overlay"></div>
        <?php include_ONCE 'affichage/nav.php'; ?> <!--Nav-->
        <h1>Disc hifi <br>
            Pour vivre votre musique !
        </h1>
    </header>
    <!---__________________-CATEGORIES-__________________--->
    <section class="category" id="category">
        <div class="container">
            <h2>Catégories</h2>
            <!-- Début de row category-->
            <div class="row">
                <!-- Ampli hifi -->
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="ampli">
                    <a href="categories?page=1&id=ampli">
                        <div class="m10">
                            <div class="overlay"></div>
                            <img class="category-bg "src="img/category/ampli/ampli.jpg" alt="Photo d'une Ampli hifi">
                            <h3>Ampli hifi</h3>
                            <div class="category-icon">
                                <i class="glyphicon icon-icon-ampli"></i>
                            </div>
                        </div>
                    </a>
                </article>
                <!-- Enceinte -->
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="enceinte">
                    <a href="categories?page=1&id=enceinte">
                        <div class="m10">
                            <div class="overlay"></div>
                            <img class="category-bg "src="img/category/enceinte/enceinte.jpg" alt="Photo d'un enceintes">
                            <h3>Enceintes</h3>
                            <div class="category-icon">
                                <i class="glyphicon icon-icon-enceinte"></i>
                            </div>
                        </div>
                    </a>
                </article>
                <!-- Barre de son -->
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="barre_son">
                    <a href="categories?page=1&id=barre_son">
                        <div class="m10">
                            <div class="overlay"></div>
                            <img class="category-bg "src="img/category/barre_son/barre_son.jpg" alt="Photo d'une barre de son">
                            <h3>Barre de son</h3>
                            <div class="category-icon">
                                <i class="glyphicon icon-icon-barre_son"></i>
                            </div>
                        </div>
                    </a>
                </article>
                <!-- Chaine HIFI -->
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="chaine_hifi">
                    <a href="categories?page=1&id=chaine_hifi">
                        <div class="m10">
                            <div class="overlay"></div>
                            <img class="category-bg "src="img/category/chaine_hifi/chaine_hifi.jpg" alt="Photo d'une chaine HIFI">
                            <h3>Chaine HIFI</h3>
                            <div class="category-icon">
                                <i class="glyphicon icon-icon-chaine_hifi"></i>
                            </div   >
                        </div>
                    </a>
                </article>
            </div>
            <!-- Fin de row category-->
            <!-- Début de row category-->
            <div class="row">
                <!-- Platine vinyle -->
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="platine">
                    <a href="categories?page=1&id=platine">
                        <div class="m10">
                            <div class="overlay"></div>
                            <img class="category-bg "src="img/category/platine/platine.jpg" alt="Photo d'une platine vinyle">
                            <h3>Platine vinyle</h3>
                            <div class="category-icon">
                                <i class="glyphicon icon-icon-platine"></i>
                            </div>
                        </div>
                    </a>
                </article>
                <!-- ampli_cinema -->
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="ampli_cinema">
                    <a href="categories?page=1&id=ampli_cinema">
                        <div class="m10">
                            <div class="overlay"></div>
                            <img class="category-bg "src="img/category/ampli_cinema/ampli_cinema.jpg" alt="Photo d'un ampli home cinema">
                            <h3>Ampli home cinema</h3>
                            <div class="category-icon">
                                <i class="glyphicon icon-icon-ampli_cinema"></i>
                            </div>
                        </a>
                    </div>
                </article>
                <!-- Caisson de basse -->
                <article class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="caisson_basse">
                    <a href="categories?page=1&id=caisson_basse">
                        <div class="m10">
                            <div class="overlay"></div>
                            <img class="category-bg "src="img/category/caisson_basse/caisson_basse.jpg" alt="Photo d'un caisson de basse">
                            <h3>Caisson de basse</h3>
                            <div class="category-icon">
                                <i class="glyphicon icon-icon-caisson_basse"></i>
                            </div>
                        </div>
                    </a>
                </article>
                <!-- Fin de row category-->
            </div>
        </div>
    </section>
    <!---__________________-MAGASIN-__________________--->
    <section id="magasin">
        <div class="container-fluid">
            <div class="img-magasin">
                <div class="magasin-img">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="title">
                            <h2>Disc Hifi <br>
                                <span>Magasin</span>
                            </h2>
                        </div>
                    </div>
                </div>
                    <div class="container">
                    <p>
                        Monsieur Patrick CHOCHOY a créé ce magasin en 1973 et l'a animé avec passion pendant 38 ans. <br>
                        <br>
                        On a pu y découvrir notamment des marques mythiques commer ROGERS, QUAD, ONYX, THORENS, ainsi que les débuts de NAD et tant d'autres
                        marques qui ont été des références dans l'histoire de la HIFI. <br>
                        <br>
                        Monsieur CHOCHOY a pris sa retraite et depuis septembre 2011, c'est Monsieur DELATTRE aussi passionné qui a repris ce magasin pour
                        continuer à faire vivre cette passion de la haute-fidélité, et vous y découvrirez une sélection de nouvelles marques tout aussi
                        prestigieuses.
                    </p>
                    <button type="button" class="btn btn-secondary open_magasin" role="link">Le magasin</button>
            </div>
            </div>
        </div>
    </section>
    <!---__________________-FOOTER-__________________--->
    <?php
    include_ONCE 'affichage/footer.php'; //////////Footer
    ?>
