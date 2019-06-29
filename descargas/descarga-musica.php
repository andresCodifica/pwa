<?php
/*icono menu*/
$icon= "../img/icon.png";  
include "../inihtml.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Descarga  musica</title>
  <?php 
  echo $link;
 ?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php  
  echo $menu;
?>
<nav aria-label="breadcrumb ">
  <ol class="breadcrumb col-8" style="margin:auto;">
    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="descargas.php">Descargas</a></li>
    <li class="breadcrumb-item active" aria-current="php">Musica</li>
  </ol>
</nav>
<div class="container mt-5">
  <div class="row">
    <div class="card  col-md-9">
      <div class="card-header">
        Destacado
      </div>
      <div class="card-body">
        <h5 class="card-title">Baladas Americanas</h5>
        <p class="card-text">Baladas americanas / Grandes Exitos / American Ballads Greatest hits DESCARGAR 1 link MEGA</p>
        <a href="descarga-baladas americanas.php" class="btn btn-primary">Descargar</a>
      </div>
    </div>
    <div class="card col-md-3">
      <div class="card-body">
         <img src="../img/baladas.jpg" class="card-img-top" alt="Imagen Baladas Americanas">
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="card  col-md-9">
      <div class="card-header">
        Destacado
      </div>
      <div class="card-body">
        <h5 class="card-title">Rock en Español</h5>
        <p class="card-text">Rock en Español grandes exitos un link MEGA descargar</p>
        <a href="descarga-rockspanish.php" class="btn btn-primary">Descargar</a>
      </div>
    </div>
    <div class="card col-md-3">
      <div class="card-body">
         <img src="../img/rock.jpg" class="card-img-top" alt="Imagen Baladas Americanas">
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="card  col-md-9">
      <div class="card-header">
        Destacado
      </div>
      <div class="card-body">
        <h5 class="card-title">Merengue Bailable</h5>
        <p class="card-text">Mix Dj Descargar 1 un link MEGA</p>
        <a href="descarga-merengue.php" class="btn btn-primary">Descargar</a>
      </div>
    </div>
    <div class="card col-md-3">
      <div class="card-body">
         <img src="../img/merengue.jpg" class="card-img-top" alt="Imagen Baladas Americanas">
      </div>
    </div>
  </div>
</div>



</body>
</html>