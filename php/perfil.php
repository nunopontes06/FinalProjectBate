<html lang="pt">
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

<body>

  <div class="container pb-3  pt-3">
    <div class="row justify-content-sm-center">
      <div class=" col-md-6 col-sm-8 col-lg-6 text-center">

        <img src="../imagens/user.png" class="img-responsive img-user">

      </div>
    </div>
  </div>

 <div class="container pb-3  pt-3">
    <div class="row justify-content-sm-center">
      <div class=" col-md-6 col-sm-8 col-lg-6 text-center">

        <button type="button" class="btn btn-success btn-lg ">Editar Perfil</button>
        <button type="button" class="btn btn-secondary btn-lg">Log Out</button>

      </div>
    </div>
  </div>
  <div class="container card card-1 pb-3 pt-3">
    <div class="row justify-content-sm-center">
      User Details
      <div class=" col-md-6 col-sm-8 col-lg-6 text-center">


      </div>
    </div>
  </div>

  <div class="container">

   <div class="card-deck pb-3 pt-3 ">
    <div class="card bg-primary">
      <div class="card-body text-center">
        <a href="addveiculo.php">
        <button class='btn far fa-car fa fa-3x '>
          <br><span class="span">Adicionar Veículos</span>
        </button></a>

      </div>
    </div>

    <div class="card bg-warning">
      <div class="card-body text-center">
        <a href="formtraseira.php"
        <button class='btn far fa-car fa fa-3x '>
          <br><span class="span">Nova Declaração</span>
        </button>
      </a>
      </div>
    </div>
    <div class="card bg-success">
      <div class="card-body text-center">
        <button class='btn far fa-car fa fa-3x '>
          <br><span class="span">Ver Declaração</span>
        </button>
      </div>
    </div>
  </div>
</div>


</body>

</html>
