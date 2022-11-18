<!DOCTYPE html>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory</title>
    <link href="style/sideHeader.css" rel="stylesheet">
    <link href="style/memory.css" rel="stylesheet">
    <link href="style/chat.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
</head>
<body>
    <?php
        include "./view/header.inc.php";
    ?>

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

    <?php include("../view/footer.inc.php");?>
</body>
</php>