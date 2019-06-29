<?php  
$link = <<< EOT
  <meta name="encoding" charset="utf-8" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
  <meta name="author" content="Jhair Andres Escobar" />
  <meta name="description" content="un sitio enfocado al aprendizaje del desarrollo web" />
  <meta name="keywords" content="desarrollo web, tutoriales, algoritmos, descargas, programacion,talleres de programacion, tareas de programacion" />
<link rel="shortcut icon" href="$icon" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="../js/funciones.js"></script>
EOT;
/*si estamos en una carpeta la variable index no se inicializa, se inicializa con el valor ../index.php para que busque el index de inicio*/
if(!isset($index)){
  $index="../index.php";
}elseif(!$index =="index.php"){
  $index="../index.php";
}
$menu = <<< EOT
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" >
    <img src="$icon" width="30" height="30" class="d-inline-block align-top" alt="Bienvenido a JanskaSystem">
    
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="$index">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Algoritmos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Portafolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter" >Contacto</a>
      </li>
    </ul>
    <span class="navbar-text">
      Andres Codifica
    </span>
  </div>
</nav>
EOT;

$footer = <<< EOT
<footer>	
	<strong>Desarrollado</strong> por Jhair Andres Escobar 
</footer>
EOT;


?>




