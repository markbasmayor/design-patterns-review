<?php
namespace DP\Creational\SimpleFactory;

use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{

    /**
     * @test
     */
    public function canCreateVehicles()
    {
        $car = VehicleFactory::create(VehicleFactory::CAR);
        $this->assertInstanceOf(Car::class, $car);

        $bike = VehicleFactory::create(VehicleFactory::BIKE);
        $this->assertInstanceOf(Bike::class, $bike);

        $ship = VehicleFactory::create(VehicleFactory::SHIP);
        $this->assertInstanceOf(Ship::class, $ship);
    }
}
