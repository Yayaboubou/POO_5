<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    /**
     * @var bool
     */
    protected $light = false;

    /**
     * @return bool
     */
    public function switchOn(): bool {
        if ($this->currentSpeed > 10) {
            return $this->light = true;
        } else {
            return $this->light;
        }
    }

    public function switchOff(): bool {
        return $this->light;
    }


}