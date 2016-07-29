<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\DestinyPlayer;

class DestinyPlayerServiceTest extends \PHPUnit_Framework_TestCase
{
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
}
