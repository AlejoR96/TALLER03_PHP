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
                $vista = "algoritmoinicio.php";
                break;
            case 1:
                $vista = "formfactorial.php";
                break;
            case 2:
                $vista = "numprimos.php";
                break;
            case 3:
                $vista = "serieFibonacci.php";
                break;
            default:
                $vista = "algoritmoinicio.php";
                break;
        }

        return $vista;
    }
}
