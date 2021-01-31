<html lang="fr-FR">
    <head>
        <?php
            include "./php/head.php";
        ?>
    </head>

    <body>
        <?php
            include "./php/header.php";
        ?>
        <main>
            <section class="section-boutique">
                <h2>Nos Articles</h2>
                <div class="fig-container">
                    <a href="/contenu/boutique/manteaux.php">
                        <figure>
                            <div>
                                <img src="/img/boutique/manteau.jpg" alt="nos manteaux pour whippet" />
                            </div>
                            <figcaption>
                                <h4>Nos Manteaux et Doudounes</h4>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="/contenu/boutique/colliers.php">
                        <figure>
                            <div>                    
                                <img src="/img/boutique/collier.jpg" alt="nos colliers et laisses pour whippet" />
                            </div>
                            <figcaption>
                                <h4>Nos Colliers et Laisses</h4>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="/contenu/boutique/paniers.php">
                        <figure>                    
                            <img src="/img/boutique/panier.jpg" alt="nos paniers pour whippet" />
                            <figcaption>
                                <h4>Nos Paniers et Couches</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </section>

        </main>

        <?php
            include "./php/footer.php";
            include "./php/script.php";
        ?>
    </body>
</html>