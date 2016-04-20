<?php

class Vehicle {
    private $type;
    private $color;
    private $speed;
    private $resistance;

    private function getMyAcceleration(){
        return $this->speed / $this->resistance;
    }
    function __construct($color,$speed,$resistance){
        $this->type=$type='voiture';
        $this->color=$color;
        $this->speed=$speed;
        $this->resistance=$resistance;
        $this->acceleration=$this->getMyAcceleration();
    }
    public function toHTML(){
        echo ('
        <p>J\'achète ma voiture : </p>
        <ul>
        <li> Type : '.$this->type.'</li>
        <li> Color : '.$this->color.'</li>
        <li> Speed : '.$this->speed.'</li>
        <li> Resistance : '.$this->resistance.'</li>
        <li> Acceleration : '.$this->acceleration.'</li>
        </ul>
        ');
    }

    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getResistance()
    {
        return $this->resistance;
    }
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
    }

    public function getAcceleration()
    {
        return $this->getMyAcceleration();
    }
}