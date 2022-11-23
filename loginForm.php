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