<html lang="pt">

<?php
    require('../require/reg.php');
?>

<head>

  <meta charset="utf-8">
  <title>Registar Conta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/registo.css">


</head>

<body>

    <script type="text/javascript">

// Function that executes on click of first next button.
function next_step1() {

document.getElementById("first").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").style.color = "red";
}
// Function that executes on click of first previous button.
function prev_step1() {
document.getElementById("first").style.display = "block";
document.getElementById("second").style.display = "none";
document.getElementById("active1").style.color = "red";
document.getElementById("active2").style.color = "gray";
}
// Function that executes on click of second next button.
function next_step2() {
document.getElementById("second").style.display = "none";
document.getElementById("third").style.display = "block";
document.getElementById("active3").style.color = "red";
}
// Function that executes on click of second previous button.
function prev_step2() {
document.getElementById("third").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").style.color = "red";
document.getElementById("active3").style.color = "gray";
}

  </script>

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


   <!-- INICIO - Form -->
  <div class="container pt-3">
    <div class="row justify-content-sm-center">
      <div class=" col-xs-12 col-sm-8 col-md-6 col-lg-5">

        <div class="card border-info  text-center">

          <div class="card-header">Efetuar Registo</div>
          <div class="card-body">

            <form class="form-signin">

            <fieldset id="first" class="require">
              <label class="float-left">Username</label>
              <input type="text" class="form-control mb-2" name="username" placeholder="Nome de utilizador" required autofocus>

              <label class="float-left">E-mail</label>
              <input type="text" class="form-control mb-2" name="email" placeholder="exemplo@gmail.com" required autofocus>

              <label class="float-left">Primeiro Nome</label>
              <input type="text" class="form-control mb-3" name="firstname" placeholder="O seu primeiro nome" required>

              <label class="float-left">Ultimo Nome</label>
              <input type="text" class="form-control mb-3" name="lastname" placeholder="Apelido" required>

              <input id="next_btn1" class="btn btn-lg btn-primary btn-block mb-2" onclick="next_step1()" type="button" value="Próximo">
            </fieldset>

            <fieldset id="second" style="display:none">
              <label class="float-left">Codigo Postal</label>
              <input type="text" class="form-control mb-2" name="cpost" placeholder="O seu CP" required autofocus>

              <label class="float-left">Número de Idebtificacao Postal</label>
              <input type="text" class="form-control mb-3" name="nif" placeholder="O seu NIF" required>

              <label class="float-left">Morada</label>
              <input type="text" class="form-control mb-3" name="morada" placeholder="A sua morada" required>

              <input id="pre_btn1" onclick="prev_step1()" class="btn btn-lg btn-secondary btn-block mb-2" type="button" value="Atrás">
              <input id="next_btn2" class="btn btn-lg btn-primary btn-block mb-2" onclick="next_step2()" type="button" value="Próximo">
            </fieldset>

            <fieldset id="third" style="display:none">
              <label class="float-left">Password</label>
              <input type="password" class="form-control mb-3" name="password" placeholder="Password" required>

              <label class="float-left">Confirme a password</label>
              <input type="password" class="form-control mb-3" name="password" placeholder="Confirme a sua password" required>

              <input id="pre_btn2" onclick="prev_step2()" class="btn btn-lg btn-secondary btn-block mb-2" type="button" value="Atrás">
              <button class="btn btn-lg btn-primary btn-block mb-2" type="submit">Registar</button>
            </fieldset>

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Fim  - Form -->

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
