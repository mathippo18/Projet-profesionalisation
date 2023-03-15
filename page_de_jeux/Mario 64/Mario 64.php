<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>TimeSkip</title>
        <link rel="icon" href="images/Trophee_Logo.png">
        <link rel="stylesheet" href="Mario 64.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $( function() {
        var tags = [
        "Mario 64",
        "Minecraft",
        "UltraKill",
        "Doom Eternal",
        "Call of Duty World at War",
        "Sekiro",
        "Mario Galaxy",
        "Dead Rising 3",
        "Doom",
        "Trover saves the universe",
        "Choo-Choo Charles",
        "Call of duty modern warfare 2",
        "Grub",
        ];
        $( "#nom_jeu" ).autocomplete({
        source: tags
            });
        } );
        </script>
    </head>
    <body >
        <header>
            <div id="header">
                <div id="SearchBarre">
            <form method = "post">
                 <input type = "text" id = "nom_jeu" name = "nom_jeu"><input type = "submit" name = "s" value = "Rechercher">
                     </form>
                     <?php
function recherche($nom_jeu)
{
    $pdo = new PDO('sqlite:../../speed.db');
    $requete = 'SELECT * FROM Recherche_jeu WHERE UPPER(Nom_jeu) LIKE ?';
    $stmt = $pdo->prepare($requete);
    $stmt->bindValue(1, $nom_jeu, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();
    $pdo = null;
    if ($result) {
    $nom = $_POST['nom_jeu'];
        header("location:../$nom/$nom.php");
  }
}
$nom = $_POST['nom_jeu'];
$id = recherche($_POST['nom_jeu'],);
if ($id != null && $_POST['s'] != "Rechercher") {
    header("location:../$nom/$nom.php");
}
?>
    </div>
                <a href="https://store.steampowered.com/app/782330/DOOM_Eternal/" ><img id="SM64_Logo" src="images/SM64_logo.png"></a>
                <?php
                if ($_SESSION['identifiant']!=null)
                {
                    echo '<p class="log">'; echo '<a href="../../page_user/user.php">'; echo $_SESSION["identifiant"]; echo '</p> <p class="accescompte"><a href="../../page_de_login/kill.php">deconnection</a></p>';

                }else{
                    echo '<p class="accescompte"><a href="../../page_de_login/log.php">connect</a></p>';
                }?>         
                   </div>
        </header>
    <!--Side navigation-->
        <div class="sidenav">
            <a href="https://www.twitch.tv/videos/484915587?t=0h0m1s"><img id="logo" src="images/Trophee_Logo.png"></a>
            <a href="../../page_de_garde/Index.php">Acceuil</a>                         <!--faire la page d'acceuil-->
            <a href="../../ajouter un Speedrun/depot.php">Déposer un speedrun</a>             <!--mettre un lien pour proposer de déposer un speedrun-->
            <a href="../../Forums/Forums.php">Forums</a>                          <!--fair eune page forum-->
            <a href="../../à propos/propos.php">à propos</a>                        <!--faire une page a propos-->
        </div>
    <!--Page content-->
        <div class="main">
            <!--code PHP-->
    <?php
    $db = new PDO('sqlite:../../speed.db');
    echo '<table>';
    $result = $db->query('SELECT * FROM "Resultat_Mario 64"'); //changer par le nom du jeux dans la table
    echo '<thead class="rowtitle"><tr><td>' . "Pseudo" . '</td><td>' . "Temps" . '</td></tr></thead>';
    while ($row = $result->fetch()) {
           echo '<tr><td>' . $row['Pseudo'] . '</td><td>' . $row['Temps'] . '</td></tr>';
    }
    echo '</table>';
    ?>
            <!--code PHP-->
        </div>
    </body>
</html>
