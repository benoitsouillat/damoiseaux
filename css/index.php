<html>
    <head lang="FR-fr">
        <title>La Romance des Damoiseaux</title>
        <?php
            include './contenu/php/head.php';
        ?>
        
    </head>
    <body>
        <?php
            include './contenu/php/header.php';
        ?>
        <section class="row m-4" id="index">
            <h2 class="hidden">La Romance des Damoiseaux - Elevage de Whippet Lof</h2>
            <div class="col">
                <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000" id="option" >
                    <ol class="carousel-indicators carousel-indicators-review">
                        <li data-target="#option" data-slide-to="0" class="active"></li>
                        <li data-target="#option" data-slide-to="1"></li>
                        <li data-target="#option" data-slide-to="2"></li>
                        <li data-target="#option" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class='carousel-item active'>
                            <img src="/img/hevidence/hevidence.jpg" alt="Whippets Damoiseaux">
                            <div class="carousel-caption bg-dark opacity-4 rounded">
                                <p>Retrouvez nos magnifiques whippets sur ce site internet <br/>
                                </p>
                                <a href="/contenu/nos-repro.php" class="btn btn-pink">Voir nos Bébés disponibles </a>
                            </div>
                        </div>
                        <div class='carousel-item'>
                            <img src="/img/articles.jpg" alt="Boutique Whippet">
                            <div class="carousel-caption bg-dark opacity-4 rounded">
                                <p>De nombreux articles sont disponibles pour le bien de vos whippets<br/>
                                N'hésitez pas à nous contacter pour plus d'informations</p>
                                <a href="./contenu/boutique.php" role="button" class="btn btn-pink">Voir les photos</a>
                            </div>
                        </div>
                        <div class='carousel-item'>
                            <img src="/img/chiot.jpg" alt="Nos Magnifiques Chiots">
                            <div class="carousel-caption bg-dark opacity-4 rounded">
                                <p>Retrouvez tous les mariages prévus et les chiots disponibles.<br/>
                                En cliquant sur ce lien </p>
                                <a href="/contenu/nos-bébés.php" role="button" class="btn btn-pink">Nos Chiots Disponibles</a>
                            </div>
                        </div>
                        <div class='carousel-item'>
                            <img src="img/whippetbois2.jpg" alt="Nos Coordonées">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded">
                                <p>Voici toutes nos coordonnées,<br/> 
                                N'hésitez pas à nous contacter pour plus d'informations.</p>
                                <a href="/contenu/contact.php" role="button" class="btn btn-pink">Contact</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev carousel-button-prevnext carousel-control-prev-btn" href="#option" data-slide="prev">
                        <span class="btn btn-pink font-weight-bold"><<</span>
                        <span class="sr-only"> Précédent </span>
                    </a>
                    <a class="carousel-control-next carousel-button-prevnext carousel-control-next-btn" href="#option" data-slide="next">
                        <span class="btn btn-pink font-weight-bold">>></span>
                        <span class="sr-only"> Suivant </span>
                    </a>

                </div>
            </aside>
        </section>
        <?php
            include './contenu/php/footer.php';
            include './contenu/php/script.php';
        ?>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>