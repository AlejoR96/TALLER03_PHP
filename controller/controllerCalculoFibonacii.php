<?php

require ("../class/calculos.php");

$calcular = new servicioCalculos();

if( (isset($_POST['varInt'])) && (!empty($_POST['varInt'])) )
{
    $numero = intval($_POST['varInt']);
    $fibo = $calcular -> Calculofibonacii($numero); 

    $respuesta = "La sucesion de ".$numero. "es ".$fibo;

}


$vista = "algoritmo.php";
$subVista="serieFibonacci.php";
require("../views/layout.php");

?>