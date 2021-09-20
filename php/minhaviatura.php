<html lang="pt">

<?php
    include('db.php');
    include("auth.php");
?>

<?php

$con = mysqli_connect('localhost','root','#Qwerty3','lastone');

$sql = mysqli_query($con, "SELECT viaturaid, matricula From viatura");


  ?>

<head>

  <meta charset="utf-8">
  <title>Minha Viatura</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/registo.css">


</head>

<body>



   <!-- INICIO - Form -->
  <div class="container pt-5">
    <div class="row justify-content-sm-center">
      <div class=" col-xs-12 col-sm-8 col-md-6 col-lg-5">

        <div class="card border-info  text-center">

          <div class="card-header">Escolher Viatura</div>
          <div class="card-body">

            <form class="form-signin" action="../php/menuForm.php" method="post">

              <div class="form-group">

                <label class="control-label float-left">Veículos</label>

                <select name="viatura" id="viatura" required>

                  <option disabled selected value> -- Seleccione Opção -- </option>

                  <?php
                    while ($row = $sql->fetch_assoc())
                      {
                        echo "<option value='".$row['viaturaid']."'>".$row['matricula']."</option>";
                      }
                      ?>

                </select>
              </div>

                <input id="next_btn1" class="btn btn-lg btn-primary btn-block mb-2" type="submit" value="Guardar">

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Fim  - Form -->
</body>
</html>
