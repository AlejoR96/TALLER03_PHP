<?php

require ("../class/viewsRutas.php");

$ruta = new RutasViews();

if(isset($_GET["opc"])){
    $vista = $ruta -> menuH($_GET["opc"]);
}

if(isset($_GET["subOpc"])){
    $subVista = $ruta -> subMenuM($_GET["subOpc"]);
}

require ("../views/layout.php");


?>