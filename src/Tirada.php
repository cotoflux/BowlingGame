<?php

namespace KataBowling;
use KataBowling\Partida;

class Tirada
{
    
    public $totalYoda=0;
    public $totalVader=0;

    function primeraRondaYoda()
    {   
        $this->totalYoda = rand(0,10);
        echo "Primera Ronda Yoda: ". $this->totalYoda. PHP_EOL;
        return $this->totalYoda;       
    }  

    function primeraRondaVader()
    {
        $this->totalVader = rand(0,10);
        echo "Primera Ronda Vader: ". $this->totalVader. PHP_EOL;
        return totalVader;
    }
/*  */
/*     function segundaRondaVader()
    {
        $totalVader = rand(0,10);
        echo "Segunda Ronda Vader: ". $totalVader.PHP_EOL;
        return $totalVader;
    } */ */

}
$var =new Tirada();
$var1y= $var->primeraRondaYoda();
$var1v= $var->primeraRondaVader();
/* $var2y= $var->segundaRondaYoda(); */
//$var2v= $var->segundaRondaVader();

/* $totalTiradaYoda = $var1y + $var2y;
$totalTiradaVader = $var1v + $var2v;

if($totalTiradaYoda == 10)
{
    echo "Strike, tu puntuación en la próxima tirada es doble";
}
 */


?>