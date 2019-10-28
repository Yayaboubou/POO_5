
<?php

abstract class HighWay
{
    /** @var array */
    protected $currentVehicles;
    /** @var int */
    protected $nbLane;
    /** @var int */
    protected $maxSpeed;
    /**
     * @param object $vehicle
     */
    abstract public function addVehicle(Vehicle $vehicle);
    /**
     * @return array
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    /**
     * @param array $currentVehicles
     * @return HighWay
     */
    public function addCurrentVehicles(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }
    /**
     * @param int $nbLane
     * @return HighWay
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    /**
     * @param int $maxSpeed
     * @return HighWay
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
}