<!DOCTYPE html>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Espace</title>
    <link href="style/monespace.css" rel="stylesheet">
    <link href="style/sideHeader.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">

</head>
<body>
    <?php
        include "../view/header.inc.php" ;
    ?>
    <section>
        <div class="banner">
            <p class="profileName">rat balls</p>
            <p><img src="style\assets\Capture d’écran 2022-11-09 à 14.25.31.jpeg" class="profileAvatar"></p>
        </div>
        <div class="activity">
            <div class="leftActivity">
                <ul class="recentPosts">
                    <p class="postTitle">Recent Posts :</p>
                    <li>Hey guys check out my new and epic highscore on the <a href="memory.php" class="hashtag">#FunnyMemory</a> game</li>
                    <li>Hey guys i think i just got a new WR on the <a href="memory.php" class="hashtag">#FunnyMemory</a> game</li>
                    <li>New Hot game! It's called <a href="memory.php" class="hashtag">#FunnyMemory</a> game</li>
                </ul>
                <p class="friendTitle"> Check out your friends profiles!</p>
                <div class="friends">
                    <a href="#"><img src="style/assets/pp-sacha.png" class="friendAvatar">XIV</a>
                    <a href="#"><img src="style/assets/pp-lina.png" class="friendAvatar">Lili04</a>
                    <a href="#"><img src="style/assets/pp-leopold.png" class="friendAvatar">Leopold</a>
                    <a href="#"><img src="style/assets/pp-ethan.png" class="friendAvatar">stinkyratman</a>
                </div>
            </div>
            <div class="rightActivity">
                <div class="highScores">
                    <a href="score.php">Click here to check out the best scores!</a>
                    <p>This user's scores:</p>
                    <ul>
                        <p>Difficulty: Impossible</p>
                        <li>Time: 24.37s</li>
                        <li>Time: 17.94s</li>
                    </ul>
                    <ul>
                        <p>Difficulty: Hard</p>
                        <li>Time: 10.08s</li>
                        <li>Time: 7.84s</li>
                        <li>Time: 5.53s</li>
                    </ul>
                </div>
                <div class="resets">
                    <div class="emailReset">
                        <p class="white">Want to change email?</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Old email"   required="required" /><br>
                            <input type="email" name="email" placeholder="New email"   required="required" /> <br>
                            <input type="password" name="password" placeholder="Mot de passe"  required="required"/> <br>
                            <input type="password" name="password" placeholder="Confirmer Mot de passe"  required="required"/>
                        </form>
                        <a href="#" class="resetButton">Confirm</a>
                    </div>
                    <div class="passwordReset">
                        <p class="white">Want to change password?</p>
                        <form action="" method="post">
                            <input type="password" name="password" placeholder="Ancien Mot de passe"  required="required"/> <br>
                            <input type="password" name="password" placeholder="Nouveau Mot de passe"  required="required"/> <br>
                            <input type="password" name="password" placeholder="Confirmer Mot de passe"  required="required"/>
                        </form>
                        <a href="#" class="resetButton">Confirm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex flex-column min-vh-100">
    <div class="container">



    <!-- Inclusion du formulaire de connexion -->
    <?php include_once('login.php'); ?>
        <h1>Te revoila!</h1>

        <!-- Si l'utilisateur existe, on affiche les recettes -->
        <?php if(isset($loggedUser)): ?>
            <?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo display_author($recipe['author'], $users); ?></i>
                </article>
            <?php endforeach ?>
        <?php endif; ?>
    </div>

    <?php include "./view/footer.inc.php";?>
</body>
</php>




  