<?php

class GumballMachine{
    private $gumballs;

    //get the amount of gumballsr still in the machine test
    public function getGumballs(){
        return $this->gumballs;
    }

    //set the amount of gumballs in the machine
    public function setGumballs($amount){
        $this->gumballs = $amount;
    }

    /// the user turns the wheel, machine dispenses gumball!
    public function turnWheel(){
        $this->setGumballs($this->getGumballs() -1);
    }

}