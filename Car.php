<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    private $energy;
    private $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
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
