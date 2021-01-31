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

<main id="ourdog">
            <h2>Nos Reproducteurs</h2>
            <section>
                <h3 class="hidden">Nos Reproducteurs</h3>
                <div>
                    <a href="#dog-card" class="vignet-dog" id="imperiale">
                        <figure >
                            <img src="/img/imperiale/imperiale.jpg" alt="impériale de la romance des damoiseaux" />
                            <figcaption>
                                <h6>Impériale</h6>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#dog-card" class="vignet-dog" id="important">
                        <figure>
                            <img src="/img/important/important.jpg" alt="important de la romance des damoiseaux" />
                            <figcaption>
                                <h6>Important</h6>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#dog-card" class="vignet-dog" id="obligeance">
                        <figure>
                            <img src="/img/obligeance/obligeance.jpg" alt="obligeance de la romance des damoiseaux" />
                            <figcaption>
                                <h6>Obligeance</h6>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#dog-card" class="vignet-dog" id="hevidence">
                        <figure>
                            <img src="/img/hevidence/hevidence.jpg" alt="hevidence de la romance des damoiseaux" />
                            <figcaption>
                                <h6>Hévidence</h6>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#dog-card" class="vignet-dog" id="merveille">
                        <figure>
                            <img src="/img/merveille/merveille.jpg" alt="merveille de la romance des damoiseaux" />
                            <figcaption>
                                <h6>Merveille</h6>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#dog-card" class="vignet-dog" id="prestance">
                        <figure>
                            <img src="/img/prestance/prestance.jpg" alt="prestance de la romance des damoiseaux" />
                            <figcaption>
                                <h6>Prestance</h6>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </section>
            <section id="dog-card" class="hidden">
                <h3 class="hidden">Nos Whippets</h3>
                <div>
                    <img id="dog-card-img" src="/img/important.jpg" alt="important" />
                    <div id="dog-info">
                        <p class="fa" ></p>
                        <p class="fa" ></p>
                        <p class="fa" ></p>
                        <a href="#" class="btn btn-pink btn__anim" >Voir ses bébés</a>
                        <a href="#"class="fancybox btn btn-beige btn__anim">Voir son Album Photo</a>
                    </div>
                </div>
            </section>
            <div id="our-dog-fancybox">
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina1.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina2.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina3.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina4.jpg"></a>

                <a class="fancybox" rel="panama" href="../src/img/panama1.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama2.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama3.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama4.jpg"></a>

                <a class="fancybox" rel="rock" href="../src/img/rock1.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock2.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock3.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock4.jpg"></a>


                
            </div>
        </main>
        

        <?php
            include "./php/footer.php";
            include "./php/script.php";
        ?>
            <script type="text/javascript" src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
            <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
            <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    </body>
</html>