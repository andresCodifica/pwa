<?php
/*icono menu*/
$icon= "../img/icon.png";  
include "../inihtml.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Descarga juegos</title>
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
    <li class="breadcrumb-item active" aria-current="page">Juegos</li>
  </ol>
</nav>
<div class="container">
<h1 class="mt-4">Juegos para Xbox 360 RGH</h1>
	<div class="container mt-5">
	  <div class="row">
	    <div class="card  col-md-9">
	      <div class="card-body">
	        <h5 class="card-title">Age of Empires 2 + The Conquerors</h5>
	        <p class="card-text">Descarga link MEGA/ <a href="https://www.youtube.com/watch?v=2RwCWpKj0gI">Como jugar en linea Multijugador Bien Explicado</a></p>
	        <a href="#" class="btn btn-primary">Descargar</a>
	      </div>
	    </div>
	    <div class="card col-md-3">
	      <div class="card-body">
	         <img src="../img/empires.jpg" class="card-img-top" alt="Imagen Baladas Americanas">
	      </div>
	    </div>
	  </div>
	</div>

</div>
</body>
</html>