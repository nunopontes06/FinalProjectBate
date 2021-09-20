<html lang="pt">

<?php
  include('db.php');
  include("auth.php");
 ?>

<head>

  <meta charset="utf-8">
  <title>Parte Traseira</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/formtraseira.css">


</head>

<body>


  <!-- INICIO - Form -->
  <div class="container pt-3">
    <div class="row justify-content-sm-center">
      <div class=" col-xs-12 col-sm-8 col-md-6 col-lg-5">

        <div class="card border-info  text-center">
          <div class="card-header">DADOS OBRIGATÓRIOS</div>

          <div class="card-body">

            <form class="form-signin" action="../require/formtraseira.php" method="post">

              <fieldset >
                <label class="float-center">O Sinistro Ocorreu em Porugal?</label>
                <br>
                <input type="radio" name="ocorrencia" value="Sim" required>Sim<br>
                <input type="radio" name="ocorrencia" value="Não">Não<br>
              </fieldset>

              <hr>
              <fieldset>
                <label class="float-center">Os veículos envolvidos
                  estão segurados em empreas que operam em Porugal?</label>
                <input type="radio" name="segurado" value="Sim" required>Sim<br>
                <input type="radio" name="segurado" value="Não">Não<br>

              </fieldset>
              <hr>
              <fieldset>
                <label class="float-center">Há algum ferido?</label>
                <br>
                <input type="radio" name="ferido" value="Sim" required>Sim<br>
                <input type="radio" name="ferido" value="Não">Não<br>

              </fieldset>
              <hr>

              <fieldset>
                <label class="float-center">Esteve alguma autoridade presente?</label>
                <br>
                <input type="radio" name="autoridade" value="Sim" required>Sim<br>
                <input type="radio" name="autoridade" value="Não">Não<br>

              </fieldset>
              <hr>

              <fieldset>
                <label class="float-center">Dados materiais noutros objetos que não veículos?</label>
                <br>
                <input type="radio" name="objetos" value="Sim" required>Sim<br>
                <input type="radio" name="objetos" value="Não">Não<br>

              </fieldset>
              <hr>

              <button class="btn btn-lg btn-primary btn-block mb-2" name="submit" type="submit">Continuar</button>

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Fim  - Form -->


</body>

</html>
