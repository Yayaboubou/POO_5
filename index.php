<?php
require_once 'Car.php';
require_once 'Speedometer.php';

$renault = new Car ('diesel');

try {
    $renault->start();
} catch (Exception $e) {
    echo 'Exception reveived : ' . $e->getMessage() . '<br>';
    $renault->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}

var_dump($renault);


echo Speedometer::convertKmToMiles(10);
