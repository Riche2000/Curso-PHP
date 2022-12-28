<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arreglos</title>
    <style>
        body{background-color: #B5CDE6; font-family: Arial; font-size:4em; padding: 50px;}
    </style>
</head>
<body>
    <?php
    $frutas = array("platano", "manzana", "uvas", "fresa");
    print_r($frutas);

    echo $frutas[2];
    echo"<br>";
    echo count($frutas) . " elementos";
    echo"<br>";
    echo"<br>";
    for($i=0; $i < count($frutas); $i++){
        echo $frutas[$i] . "<br>";
    }
    echo"<br>";
    $edades = array("Ricardo" => 22, "Luis" => 23, "Alejandro" => 13);
    print_r($edades);
    echo"<br>";
    echo $edades['Luis'];
    echo"<br>";
    echo"<br>";

    //foreach se utiliza para los arreglos asociativos
    foreach($edades as $key => $value){
        echo $key . " tiene el valor de " . $value . "<br>";
    }
    ?>
</body>
</html>