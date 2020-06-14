<?php

//require "GumballMachine.php";
//class GumballMachineTest extends PHPUnit_Framework_TestCase

use PHPunit\framework\TestCase;
class GumballMachineTest extends TestCase 

{
    public $gumballMachineInstance;
    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }

    public function testIfWheelWorks(){
        // suppose we have 100 gumballs...
        $this->gumballMachineInstance->setGumballs(100);

        //and we turn the wheel once
        $this->gumballMachineInstance->turnwheel();

        //we should now have 99 gumballs remaining in the machine right?
        $this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
    }
}