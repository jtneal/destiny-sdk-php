<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Character\AdvisorActivityData;


/**
 * Class ActivitiesServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class ActivitiesServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Activities
     */
    public function testGetActivities()
    {
        $activities = (new ActivitiesService())->getActivities(2, '4611686018450406180', '2305843009310128298');

        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $activities->getDateActivityStarted());
        $this->assertContainsOnlyInstancesOf(AdvisorActivityData::class, $activities->getAvailable());
    }

    /**
     * Test Get Activities Exception
     */
    public function testGetActivitiesException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $activities = (new ActivitiesService())->getActivities(0, 'Fail', 'Fail');
    }
}
