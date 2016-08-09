<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\PostGameCarnageReportEntryExtendedWeapon;

/**
 * Class UniqueWeaponsServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class UniqueWeaponsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Unique Weapons
     */
    public function testGetUniqueWeapons()
    {
        $weapons = (new UniqueWeaponsService())->getUniqueWeapons(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(PostGameCarnageReportEntryExtendedWeapon::class, $weapons);
    }

    /**
     * Test Get Unique Weapons Exception
     */
    public function testGetUniqueWeaponsException()
    {
        $this->expectException(StatsNotFoundException::class);

        $weapons = (new UniqueWeaponsService())->getUniqueWeapons(0, 'Fail', 'Fail');
    }
}
