<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Character\AdvisorActivityData;


/**
 * Class CharacterActivitiesServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class CharacterActivitiesServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Character Activities
     */
    public function testGetCharacterActivities()
    {
        $activities = (new CharacterActivitiesService())->getCharacterActivities(2, '4611686018450406180', '2305843009310128298');

        $this->assertStringMatchesFormat('%d-%d-%dT%d:%d:%dZ', $activities->getDateActivityStarted());
        $this->assertContainsOnlyInstancesOf(AdvisorActivityData::class, $activities->getAvailable());
    }

    /**
     * Test Get Character Activities Exception
     */
    public function testGetCharacterActivitiesException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $activities = (new CharacterActivitiesService())->getCharacterActivities(0, 'Fail', 'Fail');
    }
}
