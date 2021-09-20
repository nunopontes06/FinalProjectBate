<?php
    require('db.php');
        if (isset($_REQUEST['username'])){
          $username = stripslashes($_REQUEST['username']);
          $username = mysqli_real_escape_string($con,$username); 
          $email = stripslashes($_REQUEST['email']);
          $email = mysqli_real_escape_string($con,$email);
          $firstname = stripslashes($_REQUEST['firstname']);
          $firstname = mysqli_real_escape_string($con,$firstname);
          $lastname = stripslashes($_REQUEST['lastname']);
          $lastname = mysqli_real_escape_string($con,$lastname);
          $nif = stripslashes($_REQUEST['nif']);
          $nif = mysqli_real_escape_string($con,$nif);
          $morada = stripslashes($_REQUEST['morada']);
          $morada = mysqli_real_escape_string($con,$morada);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con,$password);
          $trn_date = date("Y-m-d H:i:s");
          $cpost = stripslashes($_REQUEST['cpost']);
          $cpost = mysqli_real_escape_string($con,$cpost);
                $query = "INSERT into `utilizador` 
                (username, password, email, firstname, lastname, morada, nif, cpost, trn_date)
                 VALUES 
                ('$username', '".md5($password)."', '$email','$firstname','$lastname','$morada','$nif','$cpost','$trn_date')";
                $result = mysqli_query($con,$query);
                if($result){
                    //echo "<div class='form'>O seu registo foi efetuado com sucesso.<br/>Clique aqui para fazer <a href='login.php'>Login</a></div>";
                    header('Location: login.php');
                }
            }else{
        }
?>
