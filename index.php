<?php
// index.php
require_once 'Bicycle.php';
require_once 'Cars.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
$bicycle->setCurrentSpeed(11);
echo $bicycle->switchOn($bicycle);
var_dump($bicycle);



// Cars
$car = new Cars('green', 4, 'electric');
echo $car->forward();
echo $car->switchOn($car);
echo $car->switchOff($car);
var_dump($car);




