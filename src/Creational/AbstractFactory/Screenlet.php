<?php
namespace DP\Creational\AbstractFactory;

class Screenlet
{
    public function createCalendar()
    {
        return new ScreenletCalendar();
    }

    public function createSensor()
    {
        return new ScreenletSensor();
    }
}
