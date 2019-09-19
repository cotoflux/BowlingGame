<?php

use KataBowling\Partida;
use PHPUnit\Framework\TestCase;

class PartidaTest extends TestCase
{
    function testInicialDevuelvePuntuacion()
    {
        $numero = 4;
        $testNumero = new Partida();
        $resultado = $testNumero->devolverPuntuacion($numero);     
        $this->assertIsInt($resultado);
        $this->assertIsNumeric($resultado);

  
    }
    function testJugadoresAZero()
    {
        $totalPuntosYoda=0;
        $totalPuntosVader=0;
        $partida=new Partida();
        $partida->iniciarJuego();

        $this->assertEquals($totalPuntosYoda,$partida->puntosDeYoda);
        $this->assertEquals($totalPuntosVader,$partida->puntosDeVader);
    }
    function iniciarPartida()
    {
        
    }

}


