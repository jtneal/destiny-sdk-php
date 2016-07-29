<?php

namespace Necowebs\Destiny\Services;

/**
 * Class BaseServiceTest
 * @package Necowebs\Destiny\Services
 */
class BaseServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get
     */
    public function testGet()
    {
        $body = (new BaseService())->get('SearchDestinyPlayer/2/Hochi_oD');
        $player = $body['Response'][0];

        $this->assertEquals('/img/theme/destiny/icons/icon_psn.png', $player['iconPath']);
        $this->assertEquals(2, $player['membershipType']);
        $this->assertEquals('4611686018450406180', $player['membershipId']);
        $this->assertEquals('Hochi_oD', $player['displayName']);
    }
}
