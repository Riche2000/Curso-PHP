<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciclos</title>
    <style>
        body{
            background-color: #E85F79;
            text-align: center;
        }
        </style>
</head>
<body>
    <?php
    /* //Duplicar imagenes con php con for
    for($i=0; $i < 3; $i++){ //inicializamos una variable y la que esta despues del primer ; es la condicional es la que nos dice hasta cuando la vamos a detener el segundo ; es cada cuanto se va a repetir 
    ?>    
    <img src="imagen.jpg" alt="">
    <?php 
    } */
    //rand nos genera un número aleatorio entre un rango de valores
    while(rand(1,10) != 5) //Mienras que el número aleatorio no sea 5 quiero que imprimas la imagen
    {
    ?>
    <img src="imagen.jpg" alt="">
    <?php
    }
    ?>
</body>
</html>