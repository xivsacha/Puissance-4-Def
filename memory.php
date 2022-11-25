<?php 
    require ('./includes/databases.inc.php'); 
    include "./view/header.inc.php";

    $id_user = $_SESSION['id_user'];

    if(isset($_POST['submit'])){
        $message = $_POST['text'];
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                if(isset($_POST['text'])){
                    $sth = $dbh->prepare("INSERT INTO message (game_ID, player_ID, message, message_date) VALUES (1, ?, ?, NOW())");
                    $sth->execute([$id_user, $message]);

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
    <title>Memory</title>
   
    <link href="style/memory.css" rel="stylesheet">
    <link href="style/chat.css" rel="stylesheet">
   
</head>
<body>
    <?php
        /*include "./view/header.inc.php";*/
    ?>
    <a class="gotopbtn" href="#"><i class="fa-solid fa-angle-up"></i></a>
    <section class="tittle">
    <h1 >JEU</h1>
    </section>    

<section class="game">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="5">Very funny memory game</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="style/assets/arab rat copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny dog copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/dabbing-man.jpg" class="memoryImage"></td>
                    <td><img src="style/assets/dog2.jpeg" class="memoryImage"></td>
                </tr>
                <tr>
                    <td><img src="style/assets/funnt rat 2.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat 3.webp" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat 4.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat 5.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat 6.gif" class="memoryImage"></td>
                </tr>
                <tr>
                    <td><img src="style/assets/funny rat 8.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat 9.webp" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat 10.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat 11.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat 12.jpeg" class="memoryImage"></td>
                </tr>
                <tr>
                    <td><img src="style/assets/arab rat copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny dog copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/dabbing-man.jpg" class="memoryImage"></td>
                    <td><img src="style/assets/dog2.jpeg" class="memoryImage"></td>
                </tr>
                <tr>
                    <td><img src="style/assets/arab rat copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny rat copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/funny dog copie.jpeg" class="memoryImage"></td>
                    <td><img src="style/assets/dabbing-man.jpg" class="memoryImage"></td>
                    <td><img src="style/assets/dog2.jpeg" class="memoryImage"></td>
                </tr>
            </tbody>
        </table>
        <div class="themeChange">
            <a class="ratButton">RAT THEME</a> 
            <a class="otherButton">OTHER THEME</a> 
            <a class="other2Button">OTHER THEME 2</a> 
        </div>
    </section>

    <div class="chatBox" id="chatBox">
        <div id="msgBox">
        </div>
            <form method="POST" id="form">
                <input class="typingWindow" name="text" type="text" id="text">
                <input type="image" name="submit" src="style/assets/chaticon2.png">
            </form>
    </div>

    <?php include "./view/footer.inc.php";
    ?>

    <script src="chat.js"></script>
</body>
</html>

