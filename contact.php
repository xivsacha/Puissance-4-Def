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

        <h1>Nous Contacter</h1>
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
            </form>
            <textarea class="textInput" placeholder="Message"></textarea>
            <a href="PoMindex.php" class="orangeButton">Envoyer
            </a>
        </div>
 
    </section>

    <?php include include "./view/footer.inc.php";?>
</body>
</html>