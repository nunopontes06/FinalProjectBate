<!-- Destroi a sessao de utilizador ao fazermos logout -->
<?php
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>