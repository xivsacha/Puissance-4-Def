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
        include "./view/header.inc.php";
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

    <div class="chat">
        <input type="checkbox" id="chatControl">
        <label class="chatButton" for="chatControl">
            <div class="chatWindow">
                <div class="chatWindow2">
                    <img src="style/assets/chaticon2.png" class="chatIcon">
                    <img src="style/assets/funny rat 3.webp" class="avatar">
                    <p class="textMessage">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
                    <p class="yourTextMessage">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
                </div>
                <textarea class="typingWindow"></textarea>
            </div>
        </label>
    </div>

    <?php include "./view/footer.inc.php";
    ?>
</body>
</html>

<?php if(isset($_SESSION['user_id'])){ ?>
    <!-- CHAT -->
    <div class="chat">
        <div class="chat-header">
            <h3>Chat général</h3>
        </div>

        <div class="chat-messages">

        <?php
        foreach($chat as $ckey => $cvalue){
            ?>
            <div class="message-container <?php if ($cvalue['estExpediteur'] == 'Vrai') {echo "user-message"; }else { echo "other-message";}; ?>">
                <div class ="author"><?php if ($cvalue['estExpediteur'] == 'Vrai') {echo "Moi"; }else { echo $cvalue['auteur'];}?></div>
                <div class="message">
                    <?=$cvalue['message']?>
                </div>
                <div class="date-sent"><?= $cvalue['time']?></div>
            </div>
        <?php
        }
        ?>
        </div>
        <div class ="chat-send">
        <form action="./send_message.php" method="POST" class="send-message">
            <input type="text" placeholder="Votre message..." name="messagetxt" id="messagetxt">
            <input type="submit" value="Envoyer" id="send-button" name="valide" onclick="message()">
        </form>
        </div>
    </div>
    <!-- CHAT -->
    <?php } ?>