<?php

class Tunning extends Vehicle{

    function __construct(){
        $this->setColor('violet');
        $this->setResistance(80);
        $this->setSpeed(600);   
    }
    public function toHTML(){
        echo ('
        <p>Mon gros tunning : </p>
        <ul>
        <li> Color : '.$this->getColor().'</li>
        <li> Speed : '.$this->getSpeed().'</li>
        <li> Resistance : '.$this->getResistance().'</li>
        <li> Acceleration : '.$this->getAcceleration().'</li>
        </ul>
        ');
    }
    public function __destruct()
    {
     echo ('A la casse');
    }
}