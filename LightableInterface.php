<?php

interface LightableInterface
{
    public function switchOn(LightableInterface $switchOn): bool;
    public function switchOff(LightableInterface $switchOff): bool;
}