<?php
include('../php/db.php');
session_start();
if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($con,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `utilizador` WHERE username='$username'
and password='".md5($password)."'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: ../php/index.php");
         }else{
  echo "<div class='login-modal'>
<h4>O Username ou password estao incorrectos.</h4>
<br/>Clique aqui para <a href='login.php'>Entrar</a></div>";
  }
    }else{
}?>
