<?php

use KataBowling\Tirada;
use PHPUnit\Framework\TestCase;

class PartidaTest extends TestCase
{
    function testHaceUnaTiradaAleatoriaPrimeraRondaYoda()
    {   
        $totalYoda=0;
        $tirada = new Tirada;
        $tirada -> primeraRondaYoda();
        $this->assertNotEquals($totalYoda,$tirada->primeraRondaYoda());
    }

    function testHaceUnaTiradaAleatoriaPrimeraRondaVader()
    {   
        $totalVader=0;
        $tirada = new Tirada;
        $tirada -> primeraRondaVader();
        $this->assertNotEquals($totalVader,$tirada->primeraRondaVader());
    }

    function testHaceUnaTiradaAleatoriaSegundaRondaYoda()
    {   
        $totalYoda=0;
        $tirada = new Tirada;
        $tirada -> segundaRondaYoda();
        $this->assertNotEquals($totalYoda,$tirada->segundaRondaYoda());
    }

    function testHaceUnaTiradaAleatoriaSegundaRondaVader()
    {   
        $totalVader=0;
        $tirada = new Tirada;
        $tirada -> segundaRondaVader();
        $this->assertNotEquals($totalVader,$tirada->segundaRondaVader());
    }

    function testNoTodasLasTiradasSonIgualesParaYoda()
    {
        $totalYoda=0;
        $tirada1=new Tirada;
        $tirada1 -> primeraRondaYoda();
        $tirada2=new Tirada;
        $tirada2 -> segundaRondaYoda();
        $this->assertNotEquals($tirada1->primeraRondaYoda(), $tirada2->segundaRondaYoda());
    }
}