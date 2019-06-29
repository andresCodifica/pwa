<?php
/*icono menu*/
$icon= "../img/icon.png";  
include "../inihtml.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Descarga programas</title>

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
    <li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
    <li class="breadcrumb-item"><a href="descargas.html">Descargas</a></li>
    <li class="breadcrumb-item active" aria-current="page">Programas</li>
  </ol>
</nav>
<div class="container mt-5">
  <div class="row">
    <div class="card  col-md-9">
      <div class="card-header">
        Windows xp
      </div>
      <div class="card-body">
        <h5 class="card-title">Deep Freeze</h5>
        <p class="card-text">Para windows XP 1 link mega FULL</p>
        <a href="#" class="btn btn-primary">Descargar</a>
      </div>
    </div>
    <div class="card col-md-3">
      <div class="card-body">
         <img src="../img/DeepFreeze.png" class="card-img-top" alt="Imagen Baladas Americanas">
      </div>
    </div>
  </div>
</div>

</body>
</html>