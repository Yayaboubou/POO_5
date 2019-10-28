<?php

abstract class Vehicle
{
    /**
     * @var string
     */
    protected $color;
    /**
     * @var integer
     */
    protected $currentSpeed;
    /**
     * @var integer
     */
    protected $nbSeats;
    /**
     * @var integer
     */
    protected $nbWheels;


    /**
     * Vehicle constructor.
     * @param string $color
     * @param int $nbSeats
     */
    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }


    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @param string $color
     * @return Vehicle
     */
    public function setColor(string $color): Vehicle
    {
        $this->color = $color;
        return $this;
    }
    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    /**
     * @param int $nbSeats
     * @return Vehicle
     */
    public function setNbSeats(int $nbSeats): Vehicle
    {
        $this->nbSeats = $nbSeats;
        return $this;
    }
    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    /**
     * @param int $nbWheels
     * @return Vehicle
     */
    public function setNbWheels(int $nbWheels): Vehicle
    {
        $this->nbWheels = $nbWheels;
        return $this;
    }

    /**
     * @return string
     */
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    /**
     * @return string
     */
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

}