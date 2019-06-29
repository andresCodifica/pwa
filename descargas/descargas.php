<?php
/*icono menu*/
$icon= "../img/icon.png";  
include "../inihtml.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Descarga de programas - juegos - musica</title>
	
<?php 
  echo $link;
 ?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<style type="text/css">
  .card-body{
  box-shadow: 8px 8px 3px #D8D8D8;
}
</style>
<body>
<?php  
  echo $menu;
?>
<div class="container">
  <div class="row justify-content-center align-items-center minh-100">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Programas</h5>
          <p class="card-text">Algunos programas curiosos.</p>
          <a href="descarga-programa.php" class="btn btn-primary">Descargar e instalar</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Juegos</h5>
          <p class="card-text">Descarga de juegos</p>
          <a href="descarga-juegos.php" class="btn btn-primary">Jugar</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Musica</h5>
          <p class="card-text">Canciones variadas para cada genero.</p>
          <a href="descarga-musica.php" class="btn btn-primary">Descarga y Disfruta</a>
        </div>
      </div>
    </div>
  </div>
</div>



    
</body>
</html>