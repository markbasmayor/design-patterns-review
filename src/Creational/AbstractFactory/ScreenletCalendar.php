<?php
namespace DP\Creational\AbstractFactory;

class ScreenletCalendar implements CalendarWidget
{
    public function paint()
    {
        return 'Added a screenlet calendar to the desktop';
    }
}
