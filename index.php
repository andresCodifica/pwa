<?php  
$icon= "img/icon.png";
$index="index.php";
include "inihtml.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Aprendizaje al desarrollo web</title>
  <meta name="encoding" charset="utf-8" />
  <meta name="author" content="Jhair Andres Escobar" />
  <meta name="description" content="un sitio enfocado al aprendizaje del desarrollo web" />
  <meta name="keywords" content="desarrollo web, tutoriales, algoritmos, descargas, programacion,talleres de programacion, tareas de programacion" />

  <!-- color de la barra de direcciones-->
  <meta name="theme-color" content="#F0DB4F">
  <!--sitio optimizado para moviles-->
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <!-- meta etiquetas para dispositivos ios-->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <!--icono de la pestaña-->
  <link rel="shortcut icon" href="img/icon.png" />
  <!-- imagen de inicio de app-->
  <link rel="apple-touch-icon" href="img/pinguin.png">
  <!--incono de acceso directo para la pantalla -->
  <link rel="apple-touch-startup-image" href="img/icon.png">
  <!--manifiesto json-->
  <link rel="manifest" href="manifest.json">

  <?php 
  echo $link;
 ?>
</head>


<link rel="stylesheet" type="text/css" href="css/great.css" media="screen and (min-width: 1201px)"/>
<link rel="stylesheet" type="text/css" href="css/medium.css" media="screen and (min-width: 801px) and (max-width:1200px)"/>
<link rel="stylesheet" type="text/css" href="css/mini.css" media="screen and (max-width: 800px)"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<?php  
  echo $menu;
?>
<section class="banner">
    <h1>publicidad</h1>
</section>
<!--contenido-->
<div class="bloque">
<div class="conten">
      <div class="contenido">
        <img src="img/tutoriales.jpg" width="300" height="180">
          <div class="contenedor">
            <strong><a href="tutoriales/indice.php">Tutoriales</a></strong>
          </div>
      </div>
      <div class="contenido">
        <img src="img/code.jpg" width="300" height="180">
        <div class="contenedor">
          <strong><a href="">Algoritmos</a></strong>
        </div>
      </div>

  
      <div class="contenido">
        <img src="img/teclado.jpg" width="300" height="180">
        <div class="contenedor" >
          <strong><a href=descargas/descargas.php>Descargas</a></strong>
        </div>
      </div>
      

      <div class="contenido-medium">
      <div class="info-page">   
          <h3>Información interesante</h3>
          <p><strong>Echa un vistazo a la pagina encontraras algo que pueda interesarte,</strong> este es un proyecto personal en donde estaré compartiendo informacion de ayuda para todos, si no eres fanático al desarrollo puedes pasar por descargas en donde seguro encontraras algo que te agrade.</p>
          <div class="info-int">          
          </div>         
      </div>
  </div>
      </div>
      <div class="contenido-banner">
       publicidad   
      </div>  
 </div>   
 <div class="acerca-de">
        <div class="bloque-acerca">
          <div class="info-page">   
          <img src="img/yo.png"><br>
          <strong>Jhair Andres Escobar</strong>
          <p>Soy estudiante de Tecnología en análisis de sistemas de informacion, trabajo en una compañia como desarrollador web, estaré compartiendo aquí el  conocimiento que he adquirido y también de lo que este aprendiendo, el sitio estará en constante crecimiento  mediante nuevo contenido, puedes contactarme en el botón contacto del menú o escribir a webmaster@andrescodifica.com</p>
      </div>
        </div>
        <div class="bloque-entrada">
          <ul>
            <h3>Ultimas Entradas</h3>
            <li>Instalar sonnarquebe <label>1/1/2019</label></li>
            <li>Sin entradas <label>1/1/2019</label></li>
            <li>Sin entradas <label>1/1/2019</label></li>
            <li>Sin entradas <label>1/1/2019</label></li>
            <li>Sin entradas <label>1/1/2019</label></li>
            <li>Sin entradas <label>1/1/2019</label></li>
            <li>Sin entradas <label>1/1/2019</label></li>
            

          </ul>
        </div>
  </div>  
  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>   
      <div class="form-group ">
        
        <div class="row mt-3">
          <div class="col">
              <input type="text" class="form-control" placeholder="Nombres y Apellidos">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Correo Electronico">
            </div>
        </div>
        <div class="row mt-3">
          <div class="col">
              <input type="num" class="form-control" placeholder="Telefono">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Asunto">
            </div>
        </div>
        <div class="mt-3">
        <textarea class="form-control" id="validationTextarea" placeholder="Escribe tu mensaje" required></textarea>
        </div>
      </div>
      
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
   <?php 

   echo $footer;
    ?>
</body>
<script src="js/script.js"></script>
</html>