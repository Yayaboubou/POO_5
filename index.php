<?php
require_once 'Car.php';

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

