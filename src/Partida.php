<?php

namespace KataBowling;
use KataBowling\Tirada;
//include Ronda;

class Partida
{
    public $puntosDeYoda;
    public $puntosDeVader;
    public $inicioPartida=false;

    function devolverPuntuacion($numero)
    { 
        return $numero;
    }
    public function iniciarJuego(Tirada $totalYoda, Tirada $totalVader)
    {
        $this->reiniciarPuntuaciones();
        $this->reinicarPartida();
    }

    public function reinicarPartida()
    {   
        $this->setIniciarPartidaTrue();
    }

    public function reiniciarPuntuaciones()
    {
        $this->puntosDeVader = 0;
        $this->puntosDeYoda = 0;
    }

    private function setIniciarPartidaTrue()
    {
        if($this->puntosDeYoda >0 && $this->puntosDeVader >0){
            return false;
        }
        $this->inicioPartida = true;
    }
}






?>