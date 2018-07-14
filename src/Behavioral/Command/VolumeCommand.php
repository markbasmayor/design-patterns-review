<?php
namespace DP\Behavioral\Command;

class VolumeCommand implements IVolumeCommand
{

    private $speaker;

    public function __construct(Speaker $speaker)
    {
        $this->speaker = $speaker;
    }

    public function up()
    {
        $this->speaker->volumeUp();

    }

    public function down()
    {
        $this->speaker->volumeDown();
    }

}