<?php
namespace DP\Creational\AbstractFactory;

class ConkyCalendar implements CalendarWidget
{
    public function paint()
    {
        return 'Added a conky calendar to the desktop';
    }
}
