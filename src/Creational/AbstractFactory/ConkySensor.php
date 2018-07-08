<?php
namespace DP\Creational\AbstractFactory;

class ConkySensor implements SensorWidget
{
    public function paint()
    {
        return 'Added a conky sensor to the desktop';
    }
}
