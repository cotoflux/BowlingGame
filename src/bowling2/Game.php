<?php
include '../../vendor/autoload.php';
use KataBowling\bowling2\Round;

class Game{

    public function tirarPrimeraRonda()
    {

        $puntosPrimera = new Round;
        $puntosPrimeraRonda = $puntosPrimera ->randomPins();
        echo "puntos primera ronda".$puntosPrimeraRonda;
        return $puntosPrimeraRonda;
    }

}

$game=new Game();
$game1= $game->tirarPrimeraRonda();