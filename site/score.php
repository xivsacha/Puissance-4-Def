<!DOCTYPE html>
<php lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores</title>
    <link href="style/score.css" rel="stylesheet">
    <link href="style/sideHeader.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
</head>
<body>
    <?php>
        include("view/header.inc.php");
    ?>

    <section class="scoreMain">
        <table class="scoreTable">
            <thead class="tableHeader">
                <tr class="tableHeaderRow">
                    <th class="tableHeaderColumn">Jeu</th>
                    <th class="tableHeaderColumn">Joueur</th>
                    <th class="tableHeaderColumn">Difficulté</th>
                    <th class="tableHeaderColumn">Temps</th>
                    <th class="tableHeaderColumn">Date</th>
                </tr>
            </thead>
            <tbody class="tableBody">
                <tr>
                    <td>Funny Memory</td>
                    <td>Fart Maxself</td>
                    <td>MAX</td>
                    <td>0.01s</td>
                    <td>09-11-2022</trd>
                </tr>
                <tr>
                    <td>Funny Memory</td>
                    <td>stinky rat man</td>
                    <td>6</td>
                    <td>10s</td>
                    <td>07-11-2022</trd>
                </tr>
                <tr>
                    <td>Funny Memory</td>
                    <td>rat balls</td>
                    <td>7</td>
                    <td>13s</td>
                    <td>08-11-2022</trd>
                </tr>
                <tr>
                    <td>Funny Memory</td>
                    <td>...</td>
                    <td>0</td>
                    <td>0s</td>
                    <td>00-00-0000</trd>
                </tr>
                <tr>
                    <td>Funny Memory</td>
                    <td>...</td>
                    <td>0</td>
                    <td>0s</td>
                    <td>00-00-0000</trd>
                </tr>
                <tr>
                    <td>Funny Memory</td>
                    <td>...</td>
                    <td>0</td>
                    <td>0s</td>
                    <td>00-00-0000</trd>
                </tr>
                <tr>
                    <td>Funny Memory</td>
                    <td>...</td>
                    <td>0</td>
                    <td>0s</td>
                    <td>00-00-0000</trd>
                </tr>
                <tr>
                    <td>Funny Memory</td>
                    <td>...</td>
                    <td>0</td>
                    <td>0s</td>
                    <td>00-00-0000</trd>
                </tr>
            </tbody>
        </table>
        <p class="white">will add a load more button when its linked to the database</p>
    </section>

    <?php include("../view/header.inc.php");?>
</body>
</php>