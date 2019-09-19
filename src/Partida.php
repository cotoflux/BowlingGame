<?php

namespace KataBowling;

class Partida
{
    public $puntosDeYoda;
    public $puntosDeVader;
    public $iniciarPartida=false;
    function devolverPuntuacion($numero)
    { 
        return $numero;
    }

    function inicianJuegoAZero($totalPuntosYoda, $totalPuntosVader)
    {
        return $totalPuntosYoda=0;
        return $totalPuntosVader=0;

    }
    public function iniciarJuego()
    {
        $this->puntosDeVader = 0;
        $this->puntosDeYoda = 0;
    }

    public function iniciarPartida1()
    {   
        $this->iniciarPartida =true;
        $this->puntosDeVader = 0;
        $this->puntosDeYoda = 0;
        
    }
}



$player1='yoda';
$player2='darth v';
$totalPuntosYoda=0;
$totalPuntosVader=0;

function partida1Yoda(){  

    $valorTirada1= rand(0,10);
    $tirada1=$valorTirada1;
    echo "Valor Yoda:".$tirada1."<br/>";
    
    $valorTirada2= rand(0,10);
   
}

function partida1Vader(){  

    $valorTirada1= rand(0,10);
    $tirada1=$valorTirada1;
    echo "Valor Vader:".$tirada1;
    $valorTirada2= rand(0,10);
    
}
partida1Yoda();
partida1Vader();



?>