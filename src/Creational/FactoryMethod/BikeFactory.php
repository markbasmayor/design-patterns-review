<?php
namespace DP\Creational\FactoryMethod;

class BikeFactory extends VehicleFactory
{

    public function create()
    {
        return new Bike();
    }
}
