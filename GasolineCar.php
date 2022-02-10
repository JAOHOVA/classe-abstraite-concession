<?php

require_once 'Car.php';

class GasolineCar extends Car
{
    // Le reste de la classe est identique
    public float $co2Emission;

    public function __construct(float $price, string $brand, float $co2Emission)
    {
        parent::__construct($price, $brand);
        $this->co2Emission = $co2Emission;
    }

    public function getCharacteristics(): array
    {
        $characteristics = parent::getCharacteristics();
        $characteristics['co2Emission'] = $this->co2Emission;

        return $characteristics;
    }

    public function getFinalPrice(): float
    {
        $excessiveEmissions = $this->co2Emission - 119;
        if ($excessiveEmissions <= 0) {
            return $this->price;
        }

        return $this->price + 50 * $excessiveEmissions;
    }
}