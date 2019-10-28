<?php

require_once "HighWay.php";

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setMaxSpeed(130);
        $this->setNbLane(4);
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