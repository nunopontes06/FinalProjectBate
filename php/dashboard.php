<!-- Pagina do perfil de utilizador-->
<!DOCTYPE HTML>

<html>

<?php
require('db.php');
include("auth.php");
?>

<head>

  <meta charset="utf-8">
  <title>Pagina Perfil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/perfil.css">
  <link rel="stylesheet" href="../css/table.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <style>
@import "compass/css3";

// More practical CSS...
// using mobile first method (IE8,7 requires respond.js polyfill https://github.com/scottjehl/Respond)

$breakpoint-alpha: 480px; // adjust to your needs

.rwd-table {
  margin: 1em 0;
  min-width: 300px; // adjust to your needs
  
  tr {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    display: none; // for accessibility, use a visually hidden method here instead! Thanks, reddit!   
  }
  
  td {
    display: block; 
    
    &:first-child {
      padding-top: .5em;
    }
    &:last-child {
      padding-bottom: .5em;
    }

    &:before {
      content: attr(data-th)": "; // who knew you could do this? The internet, that's who.
      font-weight: bold;

      // optional stuff to make it look nicer
      width: 6.5em; // magic number :( adjust according to your own content
      display: inline-block;
      // end options
      
      @media (min-width: $breakpoint-alpha) {
        display: none;
      }
    }
  }
  
  th, td {
    text-align: left;
    
    @media (min-width: $breakpoint-alpha) {
      display: table-cell;
      padding: .25em .5em;
      
      &:first-child {
        padding-left: 0;
      }
      
      &:last-child {
        padding-right: 0;
      }
    }

  }
  
  
}


// presentational styling

@import 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700';

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #eee;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
  tr {
    border-color: lighten(#34495E, 10%);
  }
  th, td {
    margin: .5em 1em;
    @media (min-width: $breakpoint-alpha) { 
      padding: 1em !important; 
    }
  }
  th, td:before {
    color: #dd5;
  }
}
</style>

<body>

<div class="container pb-3  pt-3">
    <div class="row justify-content-sm-center">
      <div class=" col-md-6 col-sm-8 col-lg-6 text-center">

        <center><img src="../imagens/logo2.png" class="img-responsive img-user"></center>

      </div>
    </div>
  </div>

  <div class="container pb-3  pt-3">
    <div class="row justify-content-sm-center">
      <div class=" col-md-6 col-sm-8 col-lg-6 text-center">

        <a href="logout.php"><button type="button" class="btn btn-secondary btn-lg">Log Out</button></a>

      </div>
    </div>
  </div>

  <div class="container card card-1 pb-3 pt-3">
    <div class="row justify-content-sm-center">
      <div class="">

<center><h3>Olá, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Bem vindo a nossa WebApp.</h1></center>
</br>
</br>

<?php
if(isset($_SESSION['username']))
    {

              $sql = "SELECT * FROM utilizador WHERE username = '".$_SESSION['username']."'";
              $query = mysqli_query($con,$sql);
              $row = mysqli_fetch_object($query);
              $username = $row->username;
              $email = $row->email;
              $firstname = $row->firstname;
              $lastname = $row->lastname;
              $morada = $row->morada;
       }


?>

<center><h3>Informação do Utilizador</h3></br>

<div style="overflow-x:auto;">
<table class="rwd-table">
  <tr>
    <th>Primeiro Nome: </th>
    <td><?php echo $firstname?></td>
  </tr>
  <tr>
    <th>Apelido:</th>
    <td><?php echo $lastname?></td>
  </tr>
  <tr>
    <th>Morada:</th>
    <td><?php echo $morada    ?></td>
  </tr>
   <tr>
    <th>E-mail:</th>
    <td><?php echo $email     ?></td>
  </tr>
</table></center>

</div>

      </div>
    </div>
  </div>

  <div class="container">

   <div class="card-deck pb-3 pt-3 ">
    <div class="card bg-danger">
      <div class="card-body text-center">
        <a href="addveiculo.php">
        <button class='btn far fa-car fa fa-3x '>
          <br><span class="span">Adicionar Veículos</span>
        </button></a>

      </div>
    </div>

    <div class="card bg-warning">
      <div class="card-body text-center">
        <a href="formtraseira.php">
        <button class='btn far fa-car fa fa-3x '>
          <br><span class="span">Nova Declaração</span>
        </button></a>
      </div>
    </div>
    
  </div>
</div>


</body>

</html>
