<?php

namespace Necowebs\Destiny\Services\Vanguard;

use Necowebs\Destiny\Exceptions\VanguardNotFoundException;
use Necowebs\Destiny\Models\Vanguard\GrimoireBonus;
use Necowebs\Destiny\Models\Vanguard\GrimoireCard;

/**
 * Class GrimoireByMembershipServiceTest
 * @package Necowebs\Destiny\Services\Vanguard
 */
class GrimoireByMembershipServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Grimoire By Membership
     */
    public function testGetGrimoireByMembership()
    {
        $grimoire = (new GrimoireByMembershipService())->getGrimoireByMembership(2, '4611686018450406180');

        $this->assertEquals(4620, $grimoire->getScore());
        $this->assertContainsOnlyInstancesOf(GrimoireCard::class, $grimoire->getCardCollection());
        $this->assertContainsOnly('int', $grimoire->getCardsToHide());
        $this->assertContainsOnlyInstancesOf(GrimoireBonus::class, $grimoire->getBonuses());
    }

    /**
     * Test Get Grimoire By Membership Exception
     */
    public function testGetGrimoireByMembershipException()
    {
        $this->expectException(VanguardNotFoundException::class);

        $grimoire = (new GrimoireByMembershipService())->getGrimoireByMembership(0, 'Fail');
    }
}
