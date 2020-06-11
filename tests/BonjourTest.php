<?php

require "Bonjour.php";

class BonjourTest extends PHPUnit_Framework_TestCase

{
    public $BonjourInstance;
    public function setUp()
    {
        $this->BonjourInstance = new Bonjour();
    }

    public function testIfWheeWorks(){
        // suppose we have 100 bonjour
        $this->bonjourInstance->setBonjour(100);

        //and we turn the wheel once
        $this->bonjourInstance->turnwheel();

        $this->assertEquals(99, $this->bonjourInstance->getBonjour());
    }
}