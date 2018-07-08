<?php
namespace DP\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{

    /**
     * @test
     */
    public function canCreateVehicles()
    {
        $carFactory = new CarFactory();
        $car = $carFactory->create();
        $this->assertInstanceof(Car::class, $car);

        $bikeFactory = new BikeFactory();
        $bike = $bikeFactory->create();
        $this->assertInstanceOf(Bike::class, $bike);
    }
}
