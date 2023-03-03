<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">

    <meta name="viewport" 

          content="width=device-width, initial-scale=1">

    <title>Autocomplete using Jquery</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js">

      </script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">

      </script>

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

            /* Making a list of available tags */

            ];

            $( "#nom_jeu" ).autocomplete({

            source: tags

        /* #the tags is the id of the input element

        source: tags is the list of available tags*/

            });

        } );

    </script>

</head>
  <form method = "post">
   <input type = "text" id = "nom_jeu" name = "nom_jeu">
   <input type = "submit" name = "s" value = "Rechercher">
  </form>
 </body>
</html>
<?php
function recherche($nom_jeu)
{
	$pdo = new PDO('sqlite:speed.db');
	$requete = 'SELECT * FROM Recherche_jeu WHERE UPPER(Nom_jeu) LIKE ?';
	$stmt = $pdo->prepare($requete);
	$stmt->bindValue(1, $nom_jeu, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetch();
	$pdo = null;
	if ($result) {
    $nom = $_POST['nom_jeu'];
        header("location:/$nom.php");
  }
}
$nom = $_POST['nom_jeu'];
$id = recherche($_POST['nom_jeu'],);
if ($id != null && $_POST['s'] != "Rechercher") {
    header("location:/$nom.php");
}
?>

<!--Si besoin aide : https://www.delftstack.com/fr/howto/php/search-php-mysql/#cr%c3%a9er-le-code-php 

