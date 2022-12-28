<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Condicionales</title>
    <style>
        body{
            font-family:Arial;
            background: #BDE85F;
        }
        div{
            background: white;
            padding: 20px;
            margin: 0 auto;
            width: 200px;
        }
        h1{font-size: 36px;}
    </style>
</head>
<body>
    <div>
        <?php
            $hora = 17; //Es la hora
            //Operador de anidacion operador AND enalua la primera como la segunda
            if($hora > 6 && $hora < 12) //Si es de una rango de 6 de la mañana a 11 de la tarde
            {  
                echo "<h1>¡Hola! Buenos Días</h1>";
            }else if($hora >= 12 && $hora <= 18) //Si es apartir de las 12 y antes o igual as las 6 
            {
                echo "<h1>¡Hola! Buenas Tardes</h1>";
            }else //Si no se cuemple ninguna de las anteriores 
            {
            echo "<h1>¡Hola! Buenas Noches</h1>";
            }
        ?>
    </div>
</body>
</html>