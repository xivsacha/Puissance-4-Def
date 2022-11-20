<?php
require ('./includes/database.inc.php');
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['loggedin'] = false;

        if($email != '' && $password != ''){
            $sth = $dbh->prepare('SELECT * FROM user WHERE email = ? AND mdp = ?');
            $sth->execute([$email, $password]);
            $donnees = $sth->fetch();
            if($donnees != ""){
                $_SESSION['user'] = $donnees;
                $_SESSION['loggedin'] = true;
                $_SESSION['pseu'] = $donnees['pseudo'];
                header('Location:Site.php');
            }
        }
}

?>
<!DOCTYPE html>

<html lang="en">
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
                    <input type="submit" name="submit" value="connexion"/>
                </form>
                <div class="buttonStuff"><a href="myaccount.php" class="orangeButton">Connexion
                </a> <a href="inscription.php" class="option">Pas de compte? Inscrivez-vous!</a></div>
            </div>
    </section>

    <?php 
         include "./view/footer.inc.php";
    ?>
</body>
</html>
