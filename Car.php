<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    protected $energy;
    protected $energyLevel;
    protected $light;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        return $this->light = true;
    }
    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return $this->light = false;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }



}
