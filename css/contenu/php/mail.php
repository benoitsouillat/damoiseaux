<html>
<head>
    <?php
        include "./head.php";
    ?>
</head>

<body id="page-mail">

<?php


   $retour = mail('laromancedesdamoiseaux@gmail.com', $_POST['pseudo'].' vous a envoyé un message depuis la page contact du site',
        "\r\n"."\r\n"."\r\n".
            'Un message de M : '.$_POST['pseudo']."\r\n". 'Email : ' .' '.
        $_POST['mail']."\n".'Voici son message : '."\r\n".$_POST['message'],
            'Envoyé depuis : damoiseaux.lescigales.org');
   if ($retour) {
       echo "Votre message a bien été envoyé \r\n <script type=\"text/javascript\" src=\"../../app/sendmail.js\"></script>";
   }
?>

<br/>
<a href="/contenu/contact.php" class="btn btn-pink" >Revenir au site</a>


<script type="text/javascript" src="../../app/sendmail.js"></script>

</body>

</html>