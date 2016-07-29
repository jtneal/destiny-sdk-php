<?php

namespace Necowebs\Destiny\Models;

/**
 * Class DestinyPlayerTest
 * @package Necowebs\Destiny\Models
 */
class DestinyPlayerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $player = (new DestinyPlayer())
            ->setIconPath('/img/theme/destiny/icons/icon_psn.png')
            ->setMembershipType(2)
            ->setMembershipId('4611686018450406180')
            ->setDisplayName('Hochi_oD');

        $this->assertEquals('/img/theme/destiny/icons/icon_psn.png', $player->getIconPath());
        $this->assertEquals(2, $player->getMembershipType());
        $this->assertEquals('4611686018450406180', $player->getMembershipId());
        $this->assertEquals('Hochi_oD', $player->getDisplayName());
    }
}
