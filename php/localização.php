<html lang="pt">

<?php
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
  <script src="https://unpkg.com/konva@3.3.3/konva.min.js"></script>
  <script src="../js/maps.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9FoxlCvSFUWPS2lghVi_g_lxhHt46ng4&callback=initMap" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/local.css">

  <style>
    #map {
      position: fixed;
      height: 30%;
    }
  </style>

</head>


<body >

  <div id="map"></div>


  <div class="container card card-1 pb-3 pt-3 display-flex">


  </div>


  <div class="container- display-flex">
    <button class="submeter btn btn-lg btn-danger btn-block mb-2" type="submit">Guardar</button>
  </div>

</body>

</html>
