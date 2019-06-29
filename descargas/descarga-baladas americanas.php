<?php
/*icono menu*/
$icon= "../img/icon.png";  
include "../inihtml.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Descargar baladas americanas</title>
  <?php 
  echo $link;
 ?>

<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<?php  
  echo $menu;
?>
<body>

	<nav aria-label="breadcrumb ">
  <ol class="breadcrumb col-8" style="margin:auto;">
    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="descargas.php">Descargas</a></li>
    <li class="breadcrumb-item"><a href="descarga-musica.php">Musica</a></li>
    <li class="breadcrumb-item active" aria-current="page">Baladas Americanas</li>
  </ol>
</nav>
<div class="container">
	<div class="row">
		<div class="card col-10" >
		 	<div class="card-body text-center">
			    <h5 class="card-title">Baladas americanas / Grandes Exitos / American Ballads </h5>
			    <p class="card-text">Greatest hits DESCARGAR 1 link MEGA</p>
			     <h6 >Descarga Ahora no olvides esperar los 5 minutos</h6>
			<div class="mx-auto" style="max-width: 340px;">	   
			<img src="../img/baladas.jpg"  class="card-img-top"  alt="imagen de
			baladas americanas" >		
			 </div> 
			 <a href="#" class="btn btn-primary mt-5" onclick="link('http://adf.ly/1GD04d')">Descargar</a>
		  </div>
		</div>
		<div class="card">
			espacio para publicidad
		</div>
	</div>
</div>

	
</div>

</body>
</html>