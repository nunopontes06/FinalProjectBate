<!-- Este ficheiro cria a sessao, para seguranca e guarda as cookies -->

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>