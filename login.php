<!DOCTYPE html>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="style/login.css" rel="stylesheet">
    <link href="style/sideHeader.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
</head>
<body>
    <?php
       
        include "./view/header.inc.php";
    ?>
    <section class="main">
        <div class="forms">
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Email"   required="required" /> <br>
                    <input type="password" name="password" placeholder="Mot de passe"  required="required"/>
                </form>
                <div class="buttonStuff"><a href="myaccount.php" class="orangeButton">Connexion
                </a> <a href="inscription.php" class="option">Pas de compte? Inscrivez-vous!</a></div>
            </div>
    </section>
    <?php include "./view/footer.inc.php";?>
</body>
</php>