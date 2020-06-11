<?php

class Bonjour{
    private $bonjour;

    //get the amount of bonjour still in the machine
    public function getBonjour(){
        return $this->bonjour;
    }

    //set the amount of bonjour in the machine
    public function setBonjour($amount){
        $this->bonjour = $amount;
    }

    // the user turns the wheel, machine dispenses bonjour!
    public function turnWheel(){
        $this->setBonjour($this->getBonjour() -1);
    }

}