<?php
namespace DP\Behavioral\Command;

use PHPUnit\Framework\TestCase;

class SpeakerRemoteControlTest extends TestCase
{
    private $speakerRemoteControl;

    /**
     * @test
     */
    public function canChangeVolume()
    {
        $speaker = new Speaker();
        $remoteControl = new SpeakerRemoteControl(
            new VolumeCommand($speaker)
        );

        $remoteControl->volumeUp();
        $this->assertEquals(1, $speaker->getVolume());

        $remoteControl->volumeDown();
        $this->assertEquals(0, $speaker->getVolume());
    }

}
