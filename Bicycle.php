<?php

// Bicycle.php
require_once 'Vehicle.php';
require_once 'LightableInterface';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(LightableInterface $switchOn): bool
    {
        if($this->currentSpeed > 10) {
             $switchOn = true;
        } else{
            return self::switchOff($switchOn);
        }

        if($switchOn === true ) {
            echo 'Ah on voit mieux';
        }

        return $switchOn;
    }

    public function switchOff(LightableInterface $switchOff): bool
    {
        $switchOff= false;
        if($switchOff === false) {
            echo 'il fait tout noir';
        }
        return $switchOff;
    }
}