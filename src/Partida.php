<?php

namespace KataBowling;

class Partida
{
    function devolverNumero($numero)
    { 
        return $numero;
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