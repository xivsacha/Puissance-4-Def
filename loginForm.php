<?php
    require_once('./includes/database.inc.php');
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

            if($email != '' && $password != ''){
                $sth = $dbh->prepare('SELECT * FROM utilisateur WHERE email = ? AND password = ?');
                $sth->execute([$email, $password]);
                $donnees = $sth->fetch();
                if($donnees != ""){
                    $_SESSION['user'] = $donnees;
                    $_SESSION['loggedin'] = true;
                    $_SESSION['pseu'] = $donnees['pseudo'];
                    header('Location:index.php');
                }
            }
    }

    ?>