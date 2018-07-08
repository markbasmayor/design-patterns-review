<?php
namespace DP\Creational\AbstractFactory;

class Conky
{
    public function createCalendar()
    {
        return new ConkyCalendar();
    }

    public function createSensor()
    {
        return new ConkySensor();
    }
}
