<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar datos de formulario</title>
	<style> 
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="index.php" method="POST">
		<?php
			
			if(isset($_POST['nombre'])) //Validamos que existe una solicitud de POST para eso usamos la funcion isset
            {
				$nombre = $_POST['nombre']; //Capturamos los valores
				$password = $_POST['password'];
				$email = $_POST['email'];

				$campos = array(); //creamos un arreglo

				if($nombre == "") //Si nombre es igual a nada
                {
					array_push($campos, "El campo Nombre no pude estar vacío.");
				}

				if($password == "" || strlen($password) < 8) //Si password es igual nada o tiene una longitud menor a 8
                {
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 8 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false) //Si email es igual a nada o no tiene @
                {
					array_push($campos, "Ingresa un correo electrónico válido.");
				}

				if(count($campos) > 0) //Si hay más de 0 elementos
                {
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>" . $campos[$i] . "</i>";
					}
				}else //Si no se cumple lo anterior 
                {
					echo "<div class='correcto'> Datos correctos";
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email">
		</p>

		<p><input type="submit" value="Enviar datos"></p> 
	</form>
</body>
</html>