<?php
namespace DP\Creational\FactoryMethod;

class CarFactory extends VehicleFactory
{

    public function create()
    {
        return new Car();
    }
}
