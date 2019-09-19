<?php

use KataBowling\Partida;
use PHPUnit\Framework\TestCase;

class PartidaTest extends TestCase
{
    function testDevuelveNumeroPartidas()
    {
        $numero = 4;
        $partida = new Partida();
        $resultado = $partida->devolverNumero($numero);     
        $this->assertIsInt($resultado);
       //$this->assertTrue(true);
    }
}


