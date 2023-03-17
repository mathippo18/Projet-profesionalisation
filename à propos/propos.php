<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>TimeSkip</title>
        <link rel="icon" href="images/Trophee_Logo-removebg-preview.png">
        <link rel="stylesheet" href="propos.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
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
    <table id="BigBrain">
    
            <tr>
            <td>
    <div id="Grub">
        <img id="Grub" src="images/G.png">
        <p>Capitaine de l'équipage</p>
        <p>- à mener son équipage à la victoire</p>
        <p>- à fais Parti du V</p>        
    </div>
            </td>
            <td>
    <div id="Matheo">
        <img src="images/M.png">
        <p>Le second de l'équipage</p>
        <p>rechercher pour : </p>
        <p>-avoir créer une base SQL</p>
        <p>-avoir participer au design des sites Web</p>
        <p>- à fais le PHP</p>
            
    </div>
    </td>
            </tr>
            </table>
            
            <table id="Student">
            <tr>
            <td>
           
    <div id="Theo">
        <img src="images/T.png">
        <p>Cannonier</p>
        <p>- à participer au design des pages</p>
        <p>- à participer au PHP</p>
        <p>- à créer le Jolly roger de l'équipage (trophée)</p>
        <p>- à speedrunner les jeux</p>
    </div>
    </td>
            <td>
    <div id="Alex">
        <img src="images/A.png">
        <p>Timonier</p>
        <p>- à participer a la majorité des design du sites</p>
        <p>- à speedrunner les jeux</p>
            </div>
            </td>
            </tr>
            </table>
    </body>
</html>