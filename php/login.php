<html lang="pt">

<?php
  include('db.php');
  require('../require/login.php');
?>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/login.css">

  <script type="text/javascript">
    $(document).ready(function() {
      /* we get the YouTube video url and store it in a variable */
      var url = $("#video").attr('src');

      /* when the modal gets closed, the delete the url for the video */
      $("#tutorial").on('hide.bs.modal', function() {
        $("#video").attr('src', '');
      });

      /* then the modal gets open, we asign the url for the video */
      $("#tutorial").on('show.bs.modal', function() {
        $("#video").attr('src', url);
      });
    });
  </script>

</head>
<body>

 <!-- INICIO - TUTPRIAL -->
  <div class="container pt-4 ">
    <div class="row ">
      <div class="col-xs-12 col-sm-10 col-md-10 col-lg-9 text-right  ">

        <button type="button" class="btn btn-danger text-center" data-toggle="modal" data-target="#tutorial">Tutorial</button>

        <div class="modal fade" id="tutorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Como Utilizar:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <iframe id="video" src="../tutorial/TutorialVideo.mp4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FIM - TUTORIAL -->

  <!-- INICIO - FORM -->


  <div class="container pt-3">
    <div class="row justify-content-sm-center">
      <div class=" col-xs-12 col-sm-8 col-md-6 col-lg-5">

        <div class="card border-info  text-center">
          <div class="card-body">
            <img src="../imagens/logoor.png" class="logo">

            <form class="login" action="" name="login" method="post">
              <label class="float-left">Username</label>
              <input type="text" class="form-control mb-2" placeholder="Username" name="username" required autofocus>

              <label class="float-left">Password</label>
              <input type="password" class="form-control mb-3" placeholder="Password" name="password" required autofocus>

              <button class="btn btn-lg btn-primary btn-block mb-2" type="submit" value="login" name="submit">Entrar</button>
              <label class="float-left">Não tem uma conta?</label>
              <a href="registo.php" class="float-right">Registe-se Aqui</a>
            </form>
          </div>
        </div>
        <!-- FIM - FORM -->

        <!-- INICIO - TERMOS -->
        <div class="container pt-4">
          <div class="row justify-content-sm-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label class="label-termos text-center">Ao continuar você aceita a nossa Politica de Privacidade e Termos de Uso.</label>
            </div>
            <!-- FIM - TERMOS -->
          </div>
        </div>

      </div>
    </div>
  </div>


</body>
</html>
