<?php
namespace DP\Behavioral\Command;

class Speaker
{

    private $volume;

    public function __construct()
    {
        $this->volume = 0;
    }

    public function volumeUp()
    {
        $this->volume++;

    }

    public function volumeDown()
    {
        $this->volume--;
    }

    public function getVolume()
    {
        return $this->volume;
    }

}