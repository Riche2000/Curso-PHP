<?php
//comentarios 1 linea /* Varias lineas */
//caracter
$letra = "c";
//entero
$numero = 45;
//cadena
$cadena = "Mi nombre es Ricardo";
//flotante
$decimal = 3.1416;
//booleano
$verdadro = true;
//arreglo
$carros = array("chico", "camión", "convertible");
$edad =array(12, 5, 6, 22);
//nulos 
$nada = null;

echo $cadena . "<br>"; //<br> es salto de linea
echo $decimal . "<br>";
print_r($carros); //para imprimir arreglos se usa print_r
print_r($edad);
?>