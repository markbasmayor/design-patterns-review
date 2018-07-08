<?php
namespace DP\Creational\AbstractFactory;

interface WidgetFactory
{
    public function createCalendar();
    public function createSensor();
}
