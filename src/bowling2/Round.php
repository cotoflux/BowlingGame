<?php

namespace KataBowling\bowling2;

class Round{

    public $totalPins=10;
    public $totalPoints= 0;
    public $totalBalls =2;
    public $points= 0;
    

    public function randomPins(){
        $this->points = rand(0,10);   
        echo "the points". $this->points; 
        return $this->points;
    }

   


}
$round = new Round();
$round1 = $round->randomPins();



?>