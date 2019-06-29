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
	<div class="card" >
	 	<div class="card-body text-center">
		    <h5 class="card-title">Merengue Bailable</h5>
		    <p class="card-text"> grandes exitos un link MEGA descargar</p>
		     <h6>Mix Dj Descargar 1 un link MEGA<</h6>
		<div class="mx-auto" style="width: 380px;">	   
		<img src="../img/merengue.jpg"  class="card-img-top mx-auto"  alt="imagen de
		baladas americanas" >		
		 </div> 
		 <a href="#" class="btn btn-primary mt-5" onclick="link('http://atominik.com/2440752/rock-en-espanol')">Descargar</a>
	  </div>
	</div>	
</div>

</body>
</html>