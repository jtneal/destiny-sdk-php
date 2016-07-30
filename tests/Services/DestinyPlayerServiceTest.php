<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Exceptions\DestinyPlayerNotFoundException;
use Necowebs\Destiny\Models\DestinyPlayer;

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

        $expected = (new DestinyPlayer())
            ->setIconPath('/img/theme/destiny/icons/icon_psn.png')
            ->setMembershipType(2)
            ->setMembershipId('4611686018450406180')
            ->setDisplayName('Hochi_oD');

        $this->assertEquals($expected, $player);
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
