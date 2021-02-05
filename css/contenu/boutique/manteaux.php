<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <?php
            include "../php/head.php";
        ?>
        <title>Nos manteaux - la Romance des Damoiseaux</title>

    </head>

    <body>
        <?php 
            include "../php/header.php";
        ?>
        <main>
            <section class="section-boutique">
                <h2>Des manteaux pour les whippets</h2>
                <div class="fig-container">
                    <a href="#div-manteau">
                        <figure>
                            <div>
                                <img src="/img/boutique/elvis.jpg" alt="Manteau Elvis" />
                            </div>
                            <figcaption>
                                <h4>Elvis</h4>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#div-manteau">
                        <figure>
                            <div>
                                <img src="/img/boutique/bono.jpg" alt="Manteau Bono" />
                            </div>
                            <figcaption>
                                <h4>Bono</h4>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#div-manteau">
                        <figure>
                            <div>
                                <img src="/img/boutique/kevin.jpg" alt="Manteau Kevin" />
                            </div>
                            <figcaption>
                                <h4>Kevin</h4>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#div-manteau">
                        <figure>
                            <div>
                                <img src="/img/boutique/sting.jpg" alt="Manteau Sting" />
                            </div>
                            <figcaption>
                                <h4>Sting</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="hidden" id="div-manteau">
                    <div>
                        <img src="/img/boutique/elvis.jpg" alt="Elvis" />
                    </div>
                    <div>
                        <h5>Elvis</h5>
                        <p>Prix : 110€</p>
                        <p>Couleurs Disponibles : </p>
                        <div id="colour">

                        </div>

                    
                </div>
        </main>

        <?php 
            include '../php/footer.php';
            include '../php/script.php';
        ?>
    </body>