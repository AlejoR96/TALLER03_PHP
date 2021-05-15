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
        $fibo = [0,1];

        for($i=2; $i <$n; $i++){
            $fibo[] = $fibo[$i-1] + $fibo[$i-2];
        }
        echo $fibo[$n];
        
        return $fibo(10);
    }
    

    
}


?>