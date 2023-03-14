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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $( function() {
        var tags = [
        "Mario 64",
        "Minecraft",
        "Elden ring",
        "Doom Eternal",
        "Call of Duty : World at War",
        "Sekiro",
        "Mario Galaxy",
        "Dead Rising 3",
        "Doom",
        "Trover saves the universe",
        "Choo-Choo Charles",
        "Call of duty : modern warfare 2",
        ];
        $( "#nom_jeu" ).autocomplete({
        source: tags     
            });
        } );
        </script>
    </head>
    <body>
        <header>
            <div id="header">
                <!--barre de recherche + pseudo de la personne-->
                <img width="75px" src="images/Trophee_Logo-removebg-preview">
                <a href="https://www.horloge.nl/"><h1>TimeSkip</h1></a> <br> 
                <div id="SearchBarre">
                <form method = "post">
                 <input type = "text" id = "nom_jeu" name = "nom_jeu"><input type = "submit" name = "s" value = "Rechercher">
                     </form>
                </div>
<?php
function recherche($nom_jeu)
{
	$pdo = new PDO('sqlite:../speed.db');
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
    <!-- Image déffilante -->
        <div class="slider">
            <div class="slider-viewport">
            <div id="SM64">
                <div id="SMG">
                <div id="MC">
                    <div id="DOOM">
                    <div id="DOOM-E">
                        <div id="DR3">
                        <div id="Trover">
                            <div id="Sekiro">
                            <div id="CCC">
                                <div id="CODWaW">
                                <div id="CODMW2">
                                    <div id="EldenR">
                                        <div class="slider-content">
                                            <a href="http://127.0.0.1:4000/page_de_jeux/SM64.php"><img src="images/SM64.png"></a>
                                            <img src="images/SMG.png">
                                            <img src="images/MC.png">
                                            <img src="images/DOOM.png">
                                            <img src="images/DOOM-E.png">
                                            <img src="images/DR3.png">
                                            <img src="images/trover.png">
                                            <img src="images/Sekiro.png">
                                            <img src="images/CCC.png">
                                            <img src="images/CODWaW.png">
                                            <img src="images/CODMW2.png">
                                            <img src="images/EldenR.png">
                                        </div>*
                                    </div>
                                </div>
                                </div>        
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="slider-nav">
            <a href="#SM64"></a>
            <a href="#SMG"></a>
            <a href="#MC"></a>
            <a href="#DOOM"></a>
            <a href="#DOOM-E"></a>
            <a href="#DR3"></a>
            <a href="#Trover"></a>
            <a href="#Sekiro"></a>
            <a href="#CCC"></a>
            <a href="#CODWaW"></a>
            <a href="#CODMW2"></a>
            <a href="#EldenR"></a>
            </div>
        </div>
    </body>
</html>