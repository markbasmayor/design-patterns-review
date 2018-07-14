<?php
namespace DP\Behavioral\Command;

class SpeakerRemoteControl
{
    private $volumeCommand;

    public function __construct(VolumeCommand $volumeCommand)
    {
        $this->volumeCommand = $volumeCommand;
    }

    public function volumeUp()
    {
        $this->volumeCommand->up();
    }

    public function volumeDown()
    {
        $this->volumeCommand->down();
    }
}