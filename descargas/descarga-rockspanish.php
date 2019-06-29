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
	<div class="row" >
		<div class="card col-10" style="margin:auto;"">
		 	<div class="card-body text-center">
			    <h5 class="card-title">Rock en Español</h5>
			    <p class="card-text"> grandes exitos un link MEGA descargar</p>
			     <h6 >Descarga Ahora no olvides esperar los 5 minutos</h6>
			<div class="mx-auto" style="max-width: 380px;">	   
			<img src="../img/rock.jpg"  class="card-img-top mx-auto"  alt="imagen de
			rock en español" >	
			<div class="alert alert-info" role="alert">
			     <strong>PASS: </strong>  !86xPTbrkWAJPXcIGD99mcORep96zXF6eLLJeGl9Kqn8 <br>
			    <strong>PASS WINRAR: </strong>   janska
			    </div>		
			 </div> 	
			 </div> 
			 <a href="#" class="btn btn-primary mt-5" onclick="link('http://atominik.com/2440752/rock-en-espanol')">Descargar</a>
		  </div>
	    </div>
	  <div class="card"  style="margin:auto;">
			espacio para publicidad
	  </div>
	</div>	
</div>

</body>
</html>