<?php
print_r($_POST); //Imprimimos la variable global osea usuario y password
echo "<br>";
print_r($_POST['usuario']); //Imprime el Usuaio
echo "<br>";
print_r($_POST['password'] . "<br>"); //Imprime el password

//Para poder manipularlo podemos usar varibles 
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// conectarse a la base de datos
// autenticar al usuatrio 

echo "El usuario es " . $usuario . "<br />";
echo "El password es " . $password . "<br />";
?>