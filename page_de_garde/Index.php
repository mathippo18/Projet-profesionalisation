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
        <script src="../search.js">
        $( function() {
        var tags = [
        "Mario 64",
        "Minecraft",
        "Elden ring",
        "DOOM Eternal",
        "Call of Duty World at War",
        "Sekiro",
        "Mario Galaxy",
        "Dead Rising 3",
        "DOOM",
        "Trover saves the universe",
        "Choo-Choo Charles",
        "Call of duty modern warfare 2",
        "Grub"
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
        header("location:../page_de_jeux/$nom/$nom.php");
  }
}
$nom = $_POST['nom_jeu'];
$id = recherche($_POST['nom_jeu'],);
if ($id != null && $_POST['s'] != "Rechercher") {
    header("location:../page_de_jeux/$nom/$nom.php");
}

?>
 
                <?php
                if ($_SESSION['identifiant']!=null)
                {
                    echo '<p class="log">'; echo '<a href="../page_user/user.php">'; echo$_SESSION["identifiant"];echo'</a>'; echo '</p> <p class="accescompte"><a href="../page_de_login/kill.php">deconnection</a></p>';
                    
                }else{
                    echo '<p class="accescompte"><a href="../page_de_login/log.php">connect</a></p>';
                }?>
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
                                    <div id="UltraKill">
                                    <div id="suite">
                                        <div class="slider-content">
                                            <a href="../page_de_jeux/Mario 64/Mario 64.php"><img src="images/SM64.png"></a>
                                            <a href="../page_de_jeux/Mario Galaxy/Mario Galaxy.php"><img src="images/SMG.png"></a>
                                            <a href="../page_de_jeux/Minecraft/Minecraft.php"><img src="images/MC.png"></a>
                                            <a href="../page_de_jeux/DOOM/DOOM.php"><img src="images/DOOM.png"></a>
                                            <a href="../page_de_jeux/DOOM Eternal/DOOM Eternal.php"><img src="images/DOOM-E.png"></a>
                                            <a href="../page_de_jeux/Dead Rising 3/Dead Rising 3.php"><img src="images/DR3.png"></a>
                                            <a href="../page_de_jeux/Trover saves the universe/Trover saves the universe.php"><img src="images/trover.png"></a>
                                            <a href="../page_de_jeux/Sekiro/Sekiro.php"><img src="images/Sekiro.png"></a>
                                            <a href="../page_de_jeux/Choo-choo Charles/Choo-Choo Charles.php"><img src="images/CCC.png"></a>
                                            <a href="../page_de_jeux/Call of Duty World at War/Call of Duty World at War.php"><img src="images/CODWaW.png"></a>
                                            <a href="../page_de_jeux/Call of duty modern warfare 2/Call of duty modern warfare 2.php"><img src="images/CODMW2.png"></a>
                                            <a href="../page_de_jeux/UltraKill/UltraKill.php"><img src="images/UltraKill.png"></a>
                                            <img src="images/suite.png">
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
            <a href="#UltraKill"></a>
            <a href="#suite"></a>
            </div>
        </div>
    </body>
</html>