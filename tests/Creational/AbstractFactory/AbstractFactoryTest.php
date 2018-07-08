<?php
namespace DP\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;

class WidgetFactoryTest extends TestCase
{

    /**
     * @test
     */
    public function canCreateConkyWidgets()
    {
        $conky = new Conky();
        $conkyCalendar = $conky->createCalendar();
        $conkySensor = $conky->createSensor();

        $this->assertEquals('Added a conky calendar to the desktop', $conkyCalendar->paint());
        $this->assertEquals('Added a conky sensor to the desktop', $conkySensor->paint());
    }

    /**
     * @test
     */
    public function canCreateScreenletWidgets()
    {
        $screenlet = new Screenlet();
        $screenletCalendar = $screenlet->createCalendar();
        $screenletSensor = $screenlet->createSensor();

        $this->assertEquals('Added a screenlet calendar to the desktop', $screenletCalendar->paint());
        $this->assertEquals('Added a screenlet sensor to the desktop', $screenletSensor->paint());
    }
}
