<?php

class RutasViews
{

    public function menuH($r)
    {

        switch ($r) {
            case 0:
                $vista = "home.php";
                break;
            case 1:
                $vista = "algoritmo.php";
                break;
            default:
                $vista = "home.php";
                break;
        }

        return $vista;
    }

    public function subMenuM($r)
    {

        switch ($r) {
            case 0:
                $subVista = "algoritmoinicio.php";

                break;
            case 1:
                $subVista = "formfactorial.php";
                break;
            case 2:
                $subVista = "numprimos.php";
                break;
            case 3:
                $subVista = "serieFibonacci.php";
                break;
            default:
                $subVista = "algoritmoinicio.php";
                break;
        }

        return $subVista;
    }
}

/*
$vista = "algoritmo.php";
$subVista="formfactorial.php"; */
