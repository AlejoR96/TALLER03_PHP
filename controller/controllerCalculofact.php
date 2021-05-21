<?php

require ("../class/calculos.php");

$calcular = new servicioCalculos();

if( (isset($_POST['varInt'])) && (!empty($_POST['varInt'])) )
{
    $numero = intval($_POST['varInt']);
    $fact = $calcular -> Calculofactorial($numero); 

    $respuesta = "El factorial de ".$numero." es".$fact;

}


$vista = "algoritmo.php";
$subVista="formfactorial.php";
require("../views/layout.php");

?>