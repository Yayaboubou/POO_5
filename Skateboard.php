<?php

class Skateboard
{
    /**@var string */
    public $color;

    /**@var int */
    public $currentSpeed;


    /**
     * Skateboard constructor.
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /** @return string */
    public function getColor(): string
    {
        return $this->color;
    }

    /** @param string $color */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /** @return int */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /** @param int $currentSpeed */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    /** @return string */
    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    /** @return string */
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