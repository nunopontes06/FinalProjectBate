<!--Esta funcao permite que a base de dados se possa ligar ao nosso programa -->
<?php

$con = mysqli_connect("localhost","root","#Qwerty3","lastone");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
