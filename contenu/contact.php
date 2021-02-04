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
            <div id="contact-head">
                <section>
                    <h1>Contactez-nous</h1>
                    <p>Nous restons diponibles pour toute question
                        sur votre désir d'acquérir un chiot. 
                        <br />
                        Un choix réfléchi implique les meilleurs conseils
                    </p>
                </section>
                <div>
                    <img src="/img/comtesse/comtesse.jpg" alt="contactez-nous" />
                </div>
            </div>
            <div id="contact-bloc">
                <section>
                    <h4>Téléphone</h4>
                    <p>+33 6 09 26 01 30</p>
                    <p> 05 55 73 42 70</p>
                    <div class="btn btn-pink">
                        <a href="tel:+33609260130" class="responsive-hide">Appelez-nous</a>
                        <a href="tel:+33609260130" class="fa fa-phone desktop-hide"></a>
                    </div>
                    
                </section>
                <section>
                    <h4>Email</h4>
                    <p>laromancedesdamoiseaux @gmail.com</p>
                    <div class="btn btn-pink">
                        <a href="mailto:laromancedesdamoiseaux@gmail.com" class="responsive-hide">Envoyer un mail</a>
                        <a href="mailto:laromancedesdamoiseaux@gmail.com" class="fa fa-envelope desktop-hide"></a>
                    </div>
                </section>
                <section>
                    <h4>Adresse</h4>
                    <p>6 Route du Conseiller</p>
                    <p>La Faye</p>
                    <p>19510 Lamongerie</p>
                    <div class="btn btn-pink">
                        <a href="#contact-map" class="responsive-hide">Voir la carte</a>
                        <a href="#contact-map" class="fa fa-map-marker desktop-hide"></a>
                    </div>
                </section>
            </div>
            <section id="send-message">
                <h3>Envoyez-nous un message</h3>
                <p>Nous vous répondrons au plus vite par email 
                    <br/>
                    Pensez à nous laisser vos coordonnées.
                </p>
                <form method="post" action="./php/mail.php">
                    <div>
                        <label for="pseudo">Votre Nom</label>
                        <input type="text" name="pseudo" id="pseudo" required/>
                    </div>
                    <div>
                        <label for="mail">Votre Email</label>
                        <input type='email' name="mail" id="mail"/>
                    </div>
                    <div >     
                        <label for="message">Votre Message</label>
                        <textarea name="message" id="message" rows="8" ></textarea>
                    </diV>
                        <button type="submit" class="btn btn-pink">Envoyer</button>
                </form>

            </section>
            <div id="contact-place">
                <div id="contact-address">
                    <p><span class="fa fa-map-marker"> </span> La Romance des Damoiseaux
                        <br/>
                        6 Route du conseiller
                        <br/>
                        19510 Lamongerie
                    </p>
                    <div>
                        <a target="_blank" href="https://www.facebook.com/laromancedes.damoiseaux/"><span class="fa fa-facebook-square"></span></a>
                        <a target="_blank" href="https://wa.me/33609260130"><span class="fab fa-whatsapp-square"></span></a>
                    </div>
                </div>
                <div id="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6095.551913069036!2d1.6044664610160397!3d45.53376981147116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc843af4f7d44121!2sLa%20Romance%20des%20Damoiseaux!5e0!3m2!1sfr!2sfr!4v1612367934882!5m2!1sfr!2sfr" 
                        frameborder="0" 
                        style="border:0;" allowfullscreen="" 
                        aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </main>
        

        <?php
            include "./php/footer.php";
            include "./php/script.php";
        ?>
    </body>
</html>