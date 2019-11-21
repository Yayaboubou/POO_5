<?php

class Car
{
    /**
     * @var
     */
    private $energy;

    /**
     * @var bool
     */
    private $hasParkBreak = true;

    /**
     * Car constructor.
     * @param string $energy
     */
    public function __construct(string $energy)
    {
        $this->setEnergy($energy);
    }


    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBreak = $hasParkBrake;
    }

    /**
     * @throws Exception
     */
    public function start(): void
    {
        if ($this->hasParkBreak)
            throw new Exception("Attention frein à main serré !");
    }


}
