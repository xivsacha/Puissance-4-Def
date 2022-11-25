<?php
require ('./includes/databases.inc.php'); 

if(isset($_POST['button']))
{
   $pseudo = $_POST['pseudo'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password_retype = $_POST['password_retype'];
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    if(preg_match('/[a-z]/', $password) && preg_match('/[A-Z]/', $password)  && preg_match('/\d/', $password) || preg_match('/[^a-zA-Z\d]/', $password)){
        if($password_retype == $password){
            $sth = $dbh->prepare("INSERT INTO user (email, `password`, pseudo, inscr_date, login_date) VALUES (?, ?, ?, NOW(), NOW())");
            $sth->execute([$email, $password, $pseudo]);
            $data = $sth->fetch();
            header('Location:login.php');
}}
}}

       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style/inscription.css">
   
</head>
<body>
<a class="gotopbtn" href="#"><i class="fa-solid fa-angle-up"></i></a>
    <?php
        include "./view/header.inc.php";
    ?>
    
    <section class="tittle">
        <h1>Inscription</h1>
    </section>

    <section class="main">
        <div class="forms">
                <form action="" method="post" id="form">
                    <input type="email" name="email" placeholder="Email"   required="required" /> <br>
                    <input type="text" name="pseudo" placeholder="Pseudo"  required="required"/> <br>
                    <div class="password_checker">
                        <div class="input_group">
                            <input type="password" id="password" placeholder ="Mot de passe" name = "mot-de-passe">
                            </div>
                            <div class="progress">
                                    <div class="barre">
                                    
                                    </div>
                                    <div id="forceMdp"></div>
                                    </div>
                            </div>
                    <input type="password" name="password_retype" placeholder="Confirmer le mot de passe"  required="required"/>
                    <div class="buttonStuff"><input type="submit" name="button" class="orangeButton" value="Inscription"><a href="login.php" class="option">Déjà un compte? Connectez-vous!</a>
                    </div>
                </form>
                
    </section>

    <script src="insc.js"></script>

    <?php 
         include "./view/footer.inc.php";
    ?>
    
</body>
</html>


