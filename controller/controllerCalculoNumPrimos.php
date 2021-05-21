<?php

require ("../class/calculos.php");

$calcular = new servicioCalculos();

if( (isset($_POST['varInt'])) && (!empty($_POST['varInt'])) )
{
    $numero = intval($_POST['varInt']);
    $primo = $calcular -> Calculoprimos($numero); 

    if ($primo) {
        $respuesta = "El numero ". $numero ." es primo";

    }else {
        $respuesta = "El numero ". $numero ." no es primo";
    }
}


$vista = "algoritmo.php";
$subVista="numprimos.php";
require("../views/layout.php");

?>