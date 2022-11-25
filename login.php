<?php
    require ('./includes/databases.inc.php');
    if(isset($_POST['button'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
            if($email != '' && $password != ''){
                $sth = $dbh->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
                $sth->execute([$email, $password]);
                $donnees = $sth->fetch();
                if($donnees != ""){
                    $_SESSION['user'] = $donnees;
                    $_SESSION['loggedin'] = true;
                    $_SESSION['pseudo'] = $donnees['pseudo'];
                    $_SESSION['id_user'] = $donnees['player_ID'];
                    header('Location:index.php');
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
   
</head>
<body>
    <?php
       
        include "./view/header.inc.php";
    ?>
    <a class="gotopbtn" href="#"><i class="fa-solid fa-angle-up"></i></a>
    <section class="tittle">
        <h1>Connexion</h1>
    </section>
    <section class="main">
        <div class="forms">
            <form method="post">
                <input type="email" name="email" placeholder="Email" required="required" /> <br>
                <input type="password" name="password" placeholder="Mot de passe"  required="required"/>
                <div class="text_align">
                <input type="submit" name="button" class="orangeButton" value="Connexion"><a href="inscription.php" class="option">Pas de compte? Inscrivez-vous!</a>

                </div>
            </form>
            
        </div>
    </section>

    <?php 
         include "./view/footer.inc.php";
    ?>
</body>
</html>
