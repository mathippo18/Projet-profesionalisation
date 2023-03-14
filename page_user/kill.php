<?php 
session_start();
$_SESSION = array();
session_destroy();
unset($_SESSION);
header("location:../page_de_login/log.php"); //redirection la page d'ID
exit();
?>
