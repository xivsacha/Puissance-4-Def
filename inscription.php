<?php
require ('./includes/database.inc.php'); 

if(isset($_POST['submit']))
{
   $pseudo = $_POST['pseudo'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password_retype = $_POST['password_retype'];
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    if (preg_match('/[a-z]/', $password) && preg_match('/[A-Z]/', $password)  && preg_match('/\d/', $password) || preg_match('/[^a-zA-Z\d]/', $password)) {
            if($password_retype == $password){
                $sth = $dbh->prepare("INSERT INTO users (email, mdp, pseudo, inscr_date, login_date) VALUES (?, ?, ?, NOW(), NOW())");
                $sth->execute([$email, $password, $pseudo]);
                $data = $sth->fetch();
                header('Location:connexion.php');

}}
}}

       
include "./view/header.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
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
    
    <section class="main">
        <div class="forms">
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Email"   required="required" /> <br>
                    <input type="text" name="name" placeholder="Pseudo"  required="required"/> <br>
                    <input type="password" name="password" placeholder="Mot de passe"  required="required"/> <br>
                    <input type="password_RETYPE" name="password" placeholder="Confirmer le mot de passe"  required="required"/>
                    <input type="submit" name="submit" value="connexion"/>


                </form>
                <div class="buttonStuff"><a href="myaccount.php" class="orangeButton">Inscription
                </a> <a href="login.php" class="option">Déjà un compte? Connectez-vous!</a></div>
            </div>
    </section>

    <?php 
         include "./view/footer.inc.php";
    ?>
    
</body>
</html>


