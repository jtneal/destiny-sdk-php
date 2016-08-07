<?php

namespace Necowebs\Destiny\Services\Vanguard;

use Necowebs\Destiny\Exceptions\VanguardNotFoundException;
use Necowebs\Destiny\Models\Vanguard\GrimoireBonus;
use Necowebs\Destiny\Models\Vanguard\GrimoireCard;

/**
 * Class GrimoireServiceTest
 * @package Necowebs\Destiny\Services\Vanguard
 */
class GrimoireServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Grimoire
     */
    public function testGetGrimoire()
    {
        $grimoire = (new GrimoireService())->getGrimoire(2, '4611686018450406180');

        $this->assertEquals(4620, $grimoire->getScore());
        $this->assertContainsOnlyInstancesOf(GrimoireCard::class, $grimoire->getCardCollection());
        $this->assertContainsOnly('int', $grimoire->getCardsToHide());
        $this->assertContainsOnlyInstancesOf(GrimoireBonus::class, $grimoire->getBonuses());
    }

    /**
     * Test Get Grimoire Exception
     */
    public function testGetGrimoireException()
    {
        $this->expectException(VanguardNotFoundException::class);

        $grimoire = (new GrimoireService())->getGrimoire(0, 'Fail');
    }
}
