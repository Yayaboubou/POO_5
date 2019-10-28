<?php

require_once 'Bike.php';
require_once 'Car.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
require_once 'Truck.php';


$renault = new Car ('pink', 5, 'diesel');
$citroen = new Car ('red', 5, 'hybrid');
$autoroute68 = new MotorWay();
$autoroute68->addVehicle($renault);
$autoroute68->addVehicle($citroen);
var_dump($autoroute68);


$gitane = new Bike('blue', 2);
$nakamura = new Bike('black', 1);
$quinconces = new PedestrianWay();
$quinconces->addVehicle($gitane);
$quinconces->addVehicle($nakamura);
var_dump($quinconces);



