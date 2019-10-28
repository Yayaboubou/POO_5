<?php
 require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function __construct()
    {
        $this->setMaxSpeed(50);
        $this->setNbLane(2);
    }

    /**
     * @param Vehicle $vehicle
     * @return string
     */
    public function addVehicle(Vehicle $vehicle)
    {
                    $this->addCurrentVehicles($vehicle);
    }

}