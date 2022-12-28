<?php
    $x = 5;
    $y = 10;
    $a = 5;
    $b = 10;
    $c = 5;
    $d = 10;
    $e = 5;
    $f = 10;

    //Aritmeticas
    echo $x + $y;    //Suma
    echo "<br>";
    echo $x - $y;    //Resta
    echo "<br>";
    echo $x * $y;    //Multiplicacion
    echo "<br>";
    echo $x / $y;    //Division
    echo "<br>";
    echo $x % $y;    //Modulo es el residuo de la division
    echo "<br>";
    echo $x ** $y;    //Exponenciacion
    echo "<br>";

    //Asignacion
    $x = $y;    //x es igual a y
    echo $x;    //x vale 10
    echo "<br>";
    $a += $b;   //a += b y Lo que hace es sumarle a "a" lo que tiene "b"
    echo $a;
    echo "<br>";
    $c -= $d;  
    echo $c;
    echo "<br>";
    $e *= $f;   //es la forma corta de $e = $e * $f;
    echo $e;
    echo "<br>";

    //Comparacion son (==, ===, >, <, <= ,>=, <>, !=, !==)
    var_dump($x == $y); //var_dump nos permite obtener el output a nivel log
    echo "<br>";
    var_dump($x == $e);
    echo "<br>";
    //Incremento o Decremento 
    echo $x++; //Aqui sale 10 es importante la posicion ya que depende de donde estemos tomando la variable
    echo "<br>";
    echo $x;    //Aqui sale 11
    echo "<br>";
    echo ++$x; //Aqio sale 12
    echo "<br>";
    echo $x--;  
    echo "<br>"; 
    echo $x;     
    echo "<br>"; 
    echo --$x;  
    echo "<br>"; 
?>