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
            //Declaramos las variables de forma global para poder acceder a ellas
            $nombre = "";
            $password = "";
            $email = "";
            $pais = "";
            $nivel = "";

			if(isset($_POST['nombre'])) //Validamos que existe una solicitud de POST para eso usamos la funcion isset
            {
				$nombre = $_POST['nombre']; //Capturamos los valores
				$password = $_POST['password'];
				$email = $_POST['email'];
                $pais = $_POST['pais'];
                
                if(isset($_POST['nivel'])) //Si existe la variable _POST que se llama nivel
                {
					$nivel = $_POST['nivel'];
                }else{
					$nivel = "";
				}

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

                if($pais == "") //Si pais es igual a nada
                {
                    array_push($campos, "Selecciona un país de origen.");
                }

				if($nivel == "") //Si nivel es igual a nada
                {
                    array_push($campos, "Selecciona un nivel de desarrollo.");
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
		<input type="text" name="nombre" value="<?php echo $nombre;?>"> <!--Usamos value para que se queden guardados los datos ingresados previamente y no se borren-->
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value="<?php echo $password;?>">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email;?>">
		</p>

        <p>
			País de origen: <br>	
			<select name="pais" id="">
				<option value="">Selecciona un país</option>
				<option value="mx" <?php if($pais == "mx") echo "selected" ?>>México</option>
				<option value="eu" <?php if($pais == "eu") echo "selected" ?>>Estados Unidos</option>
				<option value="es" <?php if($pais == "es") echo "selected" ?>>España</option>
				<option value="ar" <?php if($pais == "ar") echo "selected" ?>>Argentina</option>
				<option value="ch" <?php if($pais == "ch") echo "selected" ?>>China</option>
			</select>
		</p>

         <p>
            Nivel de desarrollo <br>
            <input type="radio" name="nivel" value="principiante" <?php if($nivel == "principiante") echo"checked"?>> Principiante
            <input type="radio" name="nivel" value="intermedio" <?php if($nivel == "intermedio") echo"checked"?>> Intermedio
            <input type="radio" name="nivel" value="avanzado" <?php if($nivel == "avanzado") echo"checked"?>> Avanzado
         </p>
		<p><input type="submit" value="Enviar datos"></p> 
	</form>
</body>
</html>