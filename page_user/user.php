<?php
session_start();
$id = $_SESSION['Identifiant']
?>
<?php 
function new_password($MDP)
{
	$pdo = new PDO('sqlite:../speed.db');
	$requete = 'UPDATE Identifiant SET MDP=? WHERE identifiant = $id';
	$stmt = $pdo->prepare($requete);
	$stmt->bindValue(1, $MDP, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetch();
	$pdo = null;
	if ($result) {
		header("location:/kill.php");}
    }
$new_mdp = new_password(md5($_POST['MDP']), md5($_POST['MDP_conf']));
if ($new_mdp != null and md5($_POST['MDP']) == md5($_POST['MDP_conf'])) {
	header("location:/kill.php");}
?>

<!DOCTYPE html>
<head>
	<html lang="fr" dir="ltr">
	<meta charset="utf-8">
	<title>Modification mot de passe</title>
	<link rel="icon" href="icone.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<!--===============================================================================================-->
</head>

<body>
<audio autoplay>
	<source src="" type="audio/mp3">
</audio>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.gif');">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<span class="login100-form-title p-b-34 p-t-27">
						Modification du mot de passe de <?php echo$_SESSION["identifiant"];?>
					</span>
					<form method="POST">
					<div class="wrap-input100 validate-input" data-validate="Enter new password">
						<input class="input100" type="password" name="MDP" id="MDP" placeholder="Nouveau Mot de passe">
						<button type="button" id="voir">Afficher Mot de Passe</button>
						<script>
							document.getElementById('voir').addEventListener("click", function() {

								attribut = document.getElementById('MDP').getAttribute('type');
								if (attribut == 'password') {
									document.getElementById('MDP').setAttribute('type', 'text');
								} else {
									document.getElementById('MDP').setAttribute('type', 'password');
								}

							});
						</script>
                    </div>

					<div class="wrap-input100 validate-input" data-validate="Enter new password again">
						<input class="input100" type="password" name="MDP_conf" id="MDP_conf" placeholder="Confirmation nouveau mot de passe">
						<button type="button" id="voir_bis">Afficher Mot de Passe</button>
						<script>
							document.getElementById('voir_bis').addEventListener("click", function() {

								attribut = document.getElementById('MDP_conf').getAttribute('type');
								if (attribut == 'password') {
									document.getElementById('MDP_conf').setAttribute('type', 'text');
								} else {
									document.getElementById('MDP_conf').setAttribute('type', 'password');
								}

							});
						</script>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" value="valider" name="valider" />
					</div>

				</form>
				</div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>
