<?php
/*icono menu*/
$icon= "../img/icon.png";  
include "../inihtml.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Como crear un menu adaptable o responsive con html, css y javascript</title>
   <?php 
  echo $link;
 ?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php  
  echo $menu;
?>
<div class="container">

	<ul class="list-unstyled">
		<li class="media  my-4">
		
	    	<img src="../img/nav.png" class="mr-3" alt="imagen de html css y javascript " width="64" height="64">
		    <div class="media-body">
		      	<h5 class="mt-0 mb-1">Realizar un menu horizontal adaptable solo con html, css y javascript
		      	<span class="badge badge-secondary">12 ene 18 </span></h5>
		      Con este tutorial aprenderás a crear un meno responsive desde cero es ideal para empezar a comprender como funciona este tipo de menús. <a href="#">Comenzar</a>
		    </div> 
	  	</li>
	</ul>
</div>	

</body>
</html>