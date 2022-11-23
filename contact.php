<?php include 'sentMail.php';?>

<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
    <link href="style/contact.css" rel="stylesheet">
    <link href="style/sideHeader.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
</head>
<body>
    <?php
         include "./view/header.inc.php";
    ?>
    <section class="main">

        <div class="contactInfo">
            <p class="infoBox"><img src="style/assets/phone.png" class="infoIMG">06 05 04 03 02</p>
            <p class="infoBox"><img src="style/assets/mail.png" class="infoIMG">support@powerofmemory.com</p>
            <p class="infoBox"><img src="style/assets/location.png" class="infoIMG">Paris</p>
        </div>
        
        <div class="forms">
            <form action="" method="post">
                <input type="text" name="name" placeholder="Nom"    required="required"/>
                <input type="email" name="email" placeholder="Email"   required="required" /> <br>
                <input type="text" name="subject" placeholder="Sujet"  required="required"/>
                <textarea class="textInput" placeholder="Message" type="message" name="message" minlength="15" required="required"></textarea>
                <button href="PoMindex.html" class="orangeButton" type="submit" name="submit" id="contact-submit" data-submit="... Sending">Envoyer
                </button>
            </form>
            
            <div>
                <p class = "success"> <?php echo $success; ?></p>
                <p class = "failed"> <?php echo $failed; ?></p>
            </div>
        </div>
 
    </section>


    <footer>
        <div class="leftFooter">
            <p class="subTitle">Information</p>
            <p class="white">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
            <p class="white"><span class="yellow">Tel : </span>06 05 04 03 02</p>
            <p class="white"><span class="yellow">Email : </span>support@powerofmemory.com</p>
            <p class="white"><span class="yellow">Location : </span>Paris</p>
            <p><a href="https://www.facebook.com/CodingFactoryoff/"><img src="style/assets/facebookLogo.png" class="logos"></a>
                <a href="https://twitter.com/codingesieeit"><img src="style/assets/twitterLogo.png" class="logos"></a>
                <a href="https://codingfactory.fr"><img src="style/assets/googlePlusLogo.png" class="logos"></a>
                <a href="https://www.pinterest.fr/pin/comment-nous-implmentons-eduscrum-la-coding-factory-lcole-du-code-de-la-cci-de-paris-by-itescia-pour-ceux-qui-souhaitent--384565255684664885/"><img src="style/assets/pinterestLogo.png" class="logos"></a>
                <a href="https://www.instagram.com/coding_factory_/?hl=fr"><img src="style/assets/instagramLogo.png" class="logos"></a>
            </p>
            <br>
            <br>
            <br>
            <br>
            <p class="copyright">Copyright © 2022 Tous droits réservés</p>
        </div>
        <div class="rightFooter">
            <p class="subTitle">Power Of Memory</p>
            <div id="bullet">
                <ul class="bullet">
                    <li class="white"><a href="memory.html" class="infoLink">Jouer !</a></li><br>
                    <li class="white"><a href="score.html" class="infoLink">Les scores</a></li><br>
                    <li class="white"><a href="contact.html" class="infoLink">Nous contacter</a></li><br>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>