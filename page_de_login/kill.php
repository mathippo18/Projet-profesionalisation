<?php 
session_start();
$_SESSION = array();
session_destroy();
unset($_SESSION);
header("location:/Projet-TimeSkip/log.php"); //redirection la page d'ID
exit();
?>
