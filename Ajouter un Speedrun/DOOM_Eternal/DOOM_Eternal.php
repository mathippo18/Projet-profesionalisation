<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>TimeSkip</title>
        <link rel="icon" href="images/Doom_Eternal_Logo.png">
        <link rel="stylesheet" href="DOOM_Eternal.css">
    </head>
    <body background="images/DOOM_Eternal_Fond.png">
        <header>
            <div id="header">
                <!--barre de recherche + pseudo de la personne-->
                <img id="DOOM_Logo" src="images/Doom_Eternal_Logo.png">
                <a href="../page_de_login/log.php"><p class="accescompte">Connexion au compte</p></a> <!--mettre le lien de connexion au compte-->
            </div>
        </header>
    <!--Side navigation-->
        <div class="sidenav">
        <a href="https://www.twitch.tv/videos/484915587?t=0h0m1s"><img width="75px" height="95px" id="test" src="images/Trophee_Logo-removebg-preview.png"></a>
            <a href="#">Acceuil</a>                         <!--faire la page d'acceuil-->
            <a href="#">Déposer un speedrun</a>             <!--mettre un lien pour proposer de déposer un speedrun-->
            <a href="#">Forums</a>                          <!--fair eune page forum-->
            <a href="#">à propos</a>                        <!--faire une page a propos-->
        </div>
    <!--Page content-->
        <div class="main">
            <!--code PHP-->
    <?php
    $db = new PDO('sqlite:../../speed.db');
    echo '<table>';
    $result = $db->query('SELECT * FROM "Resultat_Doom Eternal"'); //changer par le nom du jeux dans la table
    echo '<tr><td>' . "Pseudo" . '</td><td>' . "Temps" . '</td></tr>';
    while ($row = $result->fetch()) {
           echo '<tr><td>' . $row['Pseudo'] . '</td><td>' . $row['Temps'] . '</td></tr>';
    }
    echo '</table>';
    ?>
            <!--code PHP-->
        </div>
            
    </body>
</html>