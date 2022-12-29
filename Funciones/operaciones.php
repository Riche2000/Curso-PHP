<?php
    function multiplicar($n1, $n2) //Multiplicar
    {
        echo "<br>";
        echo $n1 * $n2;
    }

    function esNumero($n1, $n2) //Si queremos saber si los números son númericos
    {
        if(is_numeric($n1) && is_numeric($n2))
        {
            return true;
        }else{
            return false;
        }
    }

    function MostrarError() //Mostrar errores
    {
        echo "<br>";
        echo "<span class='error'>¡Ingresa solo números!</span>";
    }

    function ValidarCampos()
    {
        if(isset($_POST['numero01']) && isset($_POST['numero02']))   //Si existen los valores numero01 y numero02
        {
            $n1 = $_POST['numero01']; 
            $n2 =$_POST['numero02'];
            if(esNumero($n1, $n2)){
                echo multiplicar($n1, $n2);
            }else{
                MostrarError();
            }
        }
    }
?>