<?php

namespace Necowebs\Destiny\Services\Stats;

use Necowebs\Destiny\Exceptions\StatsNotFoundException;
use Necowebs\Destiny\Models\Stats\PostGameCarnageReportEntryExtendedWeapon;

/**
 * Class UniqueWeaponHistoryServiceTest
 * @package Necowebs\Destiny\Services\Stats
 */
class UniqueWeaponHistoryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Unique Weapon History
     */
    public function testGetUniqueWeaponHistory()
    {
        $weapons = (new UniqueWeaponHistoryService())->getUniqueWeaponHistory(2, '4611686018450406180', '2305843009310128298');

        $this->assertContainsOnlyInstancesOf(PostGameCarnageReportEntryExtendedWeapon::class, $weapons);
    }

    /**
     * Test Get Unique Weapon History Exception
     */
    public function testGetUniqueWeaponHistoryException()
    {
        $this->expectException(StatsNotFoundException::class);

        $weapons = (new UniqueWeaponHistoryService())->getUniqueWeaponHistory(0, 'Fail', 'Fail');
    }
}
