<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    public function __construct()
    {
        $this->setMaxSpeed(10);
        $this->setNbLane(1);
    }

    /**
     * @param Vehicle $vehicle
     * @return string
     */
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck)
        {
            $this->addCurrentVehicles($vehicle);
        } else {
            return 'go back buddy, you\'re not allowed !';
        }
    }


}