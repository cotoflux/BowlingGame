<?php

use KataBowling\bowling2\Round;
use PHPUnit\Framework\TestCase;

class PartidaTest extends TestCase{

    public function testDevuelveUnNumeroRandom(){

        $crearNuevaRonda = new Round();
        $puntosRonda = $crearNuevaRonda ->randomPins();
        $this->assertIsInt($puntosRonda);
    }

    
}

