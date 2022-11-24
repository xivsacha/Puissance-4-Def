<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power of Memory</title>
    <link href="style/PoMStyle.css" rel="stylesheet">
   
</head>
<body>
    <?php
        include "./view/header.inc.php";
    ?>
    <header>
       
    
        <div class="bottomHeader">
            <p class="bigTitle">BIENVENUE DANS<br>NOTRE STUDIO !<br>
            <span class="white">Venez challenger les cerveaux les plus agiles !</span></p>
            <a href="memory.php" class="orangeButton">JOUER !</a>
    </div>
    </header>

    
    <a class="gotopbtn" href="#"><i class="fa-solid fa-angle-up"></i></a>
    <section class="section1">
        <article class="firstMain">
            <div class="images1">
            <p><img src="style/assets/retro.jpg" class="img123"><img src="style/assets/dabbing-man.jpg" class="img123"><img src="style/assets/poker.jpg" class="img123"></p>
            </div>
        </article>
        <article  class="secondMain">
            <div class="text1">
                <p class="articleTitle"><span class="bigNumbers">01</span>Lorem Ipsum</p>
                <p class="white" class="articleText">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
            </div>
            <div class="text1">
                <p class="articleTitle"><span class="bigNumbers">02</span>Lorem Ipsum</p>
                <p class="white" class="articleText">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
            </div>
            <div class="text1">
                <p class="articleTitle"><span class="bigNumbers">03</span>Lorem Ipsum</p>
                <p class="white" class="articleText">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
            </div>
        </article>
       
    </section>
    
    <section class="section2">
        <article class="thirdMain">
            <div><p><img src="style/assets/dog2.jpeg" class="img4"></p></div>
            <div class="stats">
                <div class="firstLine"><p class="firstSquare">457<br>Partie Jouées</p><p class="secondSquare">120<br>Joueurs Connectés</p><br></div>
                <div class="secondLine"><p class="thirdSquare">15<br>Temps Record</p><p class="fourthSquare">130<br>Joueurs Inscrits</p></div>
            </div>                                                                                                                                      
        </article>
        <div class="fourthMain">
            <p class="teamTitle">Notre Équipe</p>
            <p class="white">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
            <p><img src="style/assets/separator.png" class="separator"></p>
            <div class="teamPictures">
                <p class="PictureBox"><img src="style/assets/arab rat copie.jpeg" class="Picture">Sacha<span class="white"><br>Kebab Remover</span></p>
                <p class="PictureBox"><img src="https://raw.githubusercontent.com/rat-balls/Puissance-4-clean/main/style/assets/Capture%20d%E2%80%99e%CC%81cran%202022-11-09%20a%CC%80%2014.25.31.jpeg" class="Picture">Ethan<span class="white"><br>Mastermind</span></p>
                <p class="PictureBox"><img src="style/assets/funny dog copie.jpeg" class="Picture">léopold<span class="white"><br>Undercover Agent</span></p>
                <p class="PictureBox"><img src="style/assets/baby.png" class="Picture">Lina<span class="white"><br>Undercover Agent</span></p>
            </div>                                                                                                                                          
        </div>
    </section>

    <?php include "./view/footer.inc.php"; ?>  
</body>
</html>