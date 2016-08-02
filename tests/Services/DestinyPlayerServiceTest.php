<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Exceptions\DestinyPlayerNotFoundException;

/**
 * Class DestinyPlayerServiceTest
 * @package Necowebs\Destiny\Services
 */
class DestinyPlayerServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Search
     */
    public function testSearch()
    {
        $player = (new DestinyPlayerService())->search('Hochi_oD', '2');

        $this->assertEquals('/img/theme/destiny/icons/icon_psn.png', $player->getIconPath());
        $this->assertEquals(2, $player->getMembershipType());
        $this->assertEquals('4611686018450406180', $player->getMembershipId());
        $this->assertEquals('Hochi_oD', $player->getDisplayName());
    }

    /**
     * Test Search Exception
     */
    public function testSearchException()
    {
        $this->expectException(DestinyPlayerNotFoundException::class);

        $player = (new DestinyPlayerService())->search('Fail', 'X');
    }
}
