<form method="POST">
<input type="color" id="color" name="color">
<input type = "submit" name = "s" value = "Changer">
</form>
<?php
function changer_couleur($color)
{
	$pdo = new PDO('sqlite:speed.db');
	$requete = 'UPDATE Identifiant set Color = $color WHERE Identifiant = "mathippo18"';
	$stmt = $pdo->prepare($requete);
	$stmt->bindValue(1, $color, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetch();
	$pdo = null;
	if ($result) {
        header("location:/index.php");
		// Création page résultat variable en fonction de la demande header("location:/index.php");
	}
}
$color = changer_couleur($_POST['color'],);
if ($color != null && $_POST['s'] = "Changer") {
	header("location:/index.php");
	//Création page résultat variable en fonction de la demande header("location:/index.php");
}
?>