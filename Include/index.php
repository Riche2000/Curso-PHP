<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Include y Require</title>
	<style>
		#container{width: 500px; margin: 150px auto;}
		#footer{background-color: #222; padding: 10px; color: white;}
		#menu{background-color: #eee; padding: 10px;}
	</style>
</head>
<body>
	<div id="container"> <!-- Con include podemos ver los warnings y sigue mosrando lo demas de la pagina y con require sale error en todo-->
		<?php
			include("menu.php"); //Se usa para llamar todo el contenido 
		?>
	<h3>Contenido Principal</h3>
		<?php
			require("footer.php");
		?>
	</div>
</body>
</html>