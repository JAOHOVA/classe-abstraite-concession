<?php

require_once 'Car.php';

function displayPrice(Car $car): void
{
    echo $car->getFinalPrice().' ('.$car->price.')';
}
