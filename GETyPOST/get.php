<?php
print_r($_GET);  //Imprime la variable global _GET
echo "<br>";

$usuario = $_GET['tipo_usuario'];
$navegador = $_GET['navegador'];

echo "El usuario es ". $usuario . " y tiene el navegador ". $navegador;
?>