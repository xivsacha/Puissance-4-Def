<!DOCTYPE html>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style/inscription.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/sideHeader.css"/>
</head>
<body>
    <?php
       
       include "./view/header.inc.php";
    ?>
    <section class="main">
        <div class="forms">
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Email"   required="required" /> <br>
                    <input type="text" name="name" placeholder="Pseudo"  required="required"/> <br>
                    <input type="password" name="password" placeholder="Mot de passe"  required="required"/> <br>
                    <input type="password" name="password" placeholder="Confirmer le mot de passe"  required="required"/>
                </form>
                <div class="buttonStuff"><a href="myaccount.php" class="orangeButton">Inscription
                </a> <a href="login.php" class="option">Déjà un compte? Connectez-vous!</a></div>
            </div>
    </section>

    <?php 
         include "./view/footer.inc.php";
    ?>
    
</body>
</php>
<?php
  $email = "aouadilina04@gmail.com";

  
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse e-mail est valide";
  }else{
    echo "L'adresse e-mail n'est pas valide";
  }


?>

