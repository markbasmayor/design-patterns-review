<?php
namespace DP\Creational\AbstractFactory;

class ScreenletSensor implements SensorWidget
{
    public function paint()
    {
        return 'Added a screenlet sensor to the desktop';
    }
}
