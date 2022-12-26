<?php
//Funciones Las funciones empiezan con str
$mensaje = "Hoy voy a aprender mucho";
//Longitud
echo strlen($mensaje); //Nos dice de cuntas caracteres se compone la cadena
echo "<br>"; //Salto de linea
//Número de Palabras
echo str_word_count($mensaje);
echo "<br>";
//Reversa
echo strrev($mensaje);
echo "<br>";
//Encontrar texto
echo strpos($mensaje, "aprender");
echo "<br>"; //En este caso apartir de la posicion 10 aparece
//Remplazar Texto
echo str_replace("aprender", "nadar", $mensaje);
echo "<br>";
//Convertir a minúsculas
echo strtolower($mensaje);
echo "<br>";
//Convertir a mayúsculas
echo strtoupper($mensaje);
echo "<br>";
//Comparar cadenas
echo strcmp("hola", "adios"); //Nos arroja un valornumerico, datia 0 si fueran iguales 
echo "<br>";
echo strcmp("a", "b"); //Nos sale negativo porque b es más grande que b
?>