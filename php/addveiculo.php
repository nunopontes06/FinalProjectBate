<html lang="pt">

<?php
include("auth.php");
?>
    <!-- INICIO - TUTPRIAL -->
  <div class="container pt-4 ">
    <div class="row ">
      <div class="col-xs-12 col-sm-10 col-md-10 col-lg-9 text-right  ">
        <figure class="figure">
          <a href="login.php"><img src="../imagens/home.png" class="img-responsive "></a>
          <figcaption class="figure-caption text-center">Home</figcaption>
        </figure>
      </div>
    </div>
  </div>
  <!-- Fim - TUTPRIAL -->

<head>



  <meta charset="utf-8">
  <title>Adicionar Veículo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/registo.css">


</head>

<body>

<div class="container pt-3">
    <div class="row justify-content-sm-center">
      <div class=" col-xs-12 col-sm-8 col-md-6 col-lg-5">

        <div class="card border-info  text-center">

          <div class="card-header">Adicionar Veículo</div>
          <div class="card-body">

          <form class="form-signin" action="../require/insert.php" method="post">

              <label class="float-left">Matricula</label>
              <input type="text" class="form-control mb-2" name="matricula" id="matricula" placeholder="Introduza a matricula do veículo" required autofocus>

               <label class="float-left">Pais-Matricula</label>
              <input type="text" class="form-control mb-3" name="paismatricula" id="paismatricula" placeholder="Tipo de veículo" required>


              <label class="float-left">Tipo</label>
              <input type="text" class="form-control mb-3" name="tipo" id="tipo" placeholder="Tipo de veículo" required>


              <div class="form-group">
                <label class="control-label">Companhia</label>
                <select name="companhia" id="companhia" required>
                  <option disabled selected value> -- Selecione Opção -- </option>
                  <option value="AXA">AXA</option>
                  <option value="AcoreanaSeguros">Acoreana Seguros</option>
                  <option value="Allianz">Allianz</option>
                  <option value="CaravelaSeguros">Caravela Seguros</option>
                  <option value="Fidelidade">Fidelidade</option>
                  <option value="Generali">Generali</option>
                  <option value="Groupama">Groupama</option>
                  <option value="LibertySeguros">Liberty Seguros</option>
                  <option value="Lusitania">Lusitania</option>
                  <option value="Mapfre">Mapfre</option>
                  <option value="Ocidental">Ocidental</option>
                  <option value="RealVidaSeguros">Real Vida Seguros</option>
                  <option value="Tranquilidade">Tranquilidade</option>
                  <option value="VictoriaSeguros">Victoria Seguros</option>
                  <option value="Zurich">Zurich</option>
                  <option value="Victoria Seguros">Victoria Seguros</option>
                  <option value="Logo">Logo</option>
                  <option value="Nseguros">Nseguros</option>
                  <option value="OKteleseguros">OKteleseguros</option>
                  <option value="SeguroDirecto">Seguro Directo</option>
                </select>
              </div>

               <label class="float-left">Marca</label>
              <input type="text" class="form-control mb-3" name="marca" id="marca" placeholder="marca" required>

              <label class="float-left">Modelo</label>
              <input type="text" class="form-control mb-2" name="modelo" id="modelo" placeholder="A marca do veículo" required autofocus>

          <input type="submit" value=" Submit " name="submit">

        </form>

       </div>

        </div>
      </div>
    </div>
  </div>

  <!-- INICIO - TERMOS -->
  <div class="container pt-4">
    <div class="row justify-content-sm-center">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-center">
        <label class="label-termos text-center">Ao continuar você aceita a nossa Politica de Privacidade e Termos de Uso</label>
      </div>
      <!-- FIM - TERMOS -->
    </div>
  </div>

</body>
</html>
