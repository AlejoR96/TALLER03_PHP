<?php
/**AQUI VAN LAS CLASES QUE NECESITO*/

class servicioCalculos{

    public function Calculofactorial($n)
    {
        $factorial = 1;
    
        for($i=1; $i < $n; $i++)
        {
           $factorial = $factorial * $i;
        }
        return $factorial;
    }

    public function Calculoprimos($n)
    {
        $aux = true;
        for($i=2; $i < $n; $i++){
            if(($n % $i) == 0){
                $aux = false;
                return;
            }
        }return $aux;
    }

    public function Calculofibonacii($n)
    {
        $valorUno=0;
        $valorDos=1;
        $suma = 1;
        $sucesion = "0 1 ";

           
            for ($i =3 ; $i <= $n ; $i++) {
                $valorUno = $valorDos ;
                $valorDos = $suma;
                $suma = $valorUno + $valorDos;
                $sucesion = $sucesion . "  ". $suma;    
            }

            return $sucesion;

    }
    

    
}


?>