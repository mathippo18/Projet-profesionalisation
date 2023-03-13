<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>TimeSkip</title>
        <link rel="icon" href="images/Trophee_Logo-removebg-preview.png">
        <link rel="stylesheet" href="Index.css">
    </head>
    <body>
        <header>
            <div id="header">
                <!--barre de recherche + pseudo de la personne-->
                <img width="75px" src="images/Trophee_Logo-removebg-preview">
                <a href="https://www.horloge.nl/"><h1>TimeSkip</h1></a>
                
                <?php
                if ($_SESSION['identifiant']!=null)
                {
                    echo '<p class="log">'; echo $_SESSION["identifiant"]; echo '</p> <p class="accescompte"><a href="../page_de_login/kill.php">deconnection</a></p>';
                    
                }else{
                    echo '<p class="accescompte"><a href="../page_de_login/log.php">connect</a></p>';
                }?></p>
               
            </div>
        </header>
    <!-- Side navigation -->
        <div class="sidenav">
            <a href="https://www.twitch.tv/videos/484915587?t=0h0m1s"><img width="75px" height="95px" id="logo" src="images/Trophee_Logo-removebg-preview.png"></a>
            <a href="#">Acceuil</a>                         <!--faire la page d'acceuil-->
            <a href="#">Déposer un speedrun</a>             <!--mettre un lien pour proposer de déposer un speedrun-->
            <a href="#">Forums</a>                          <!--fair eune page forum-->
            <a href="#">à propos</a>                        <!--faire une page a propos-->
        </div>
    <!-- Page content -->
        <div class="main">
            ...
        </div>
    </body>
</html>