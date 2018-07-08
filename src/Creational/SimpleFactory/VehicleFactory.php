<?php
namespace DP\Creational\SimpleFactory;

class VehicleFactory
{
    const CAR = 'car';
    const BIKE = 'bike';
    const SHIP = 'ship';

    private function __construct()
    {

    }

    public function create($type)
    {
        switch ($type) {
            case static::CAR:
                return new Car();
            case static::BIKE:
                return new Bike();
            case static::SHIP:
                return new Ship();
        }
    }
}
