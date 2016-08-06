<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\AdvisorRecordBook;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;
use Necowebs\Destiny\Models\Character\AdvisorActivities;
use Necowebs\Destiny\Models\Character\AdvisorBounty;
use Necowebs\Destiny\Models\Character\AdvisorCategory;


/**
 * Class AdvisorsServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class AdvisorsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Advisors
     */
    public function testGetAdvisors()
    {
        $advisors = (new AdvisorsService())->getAdvisors(2, '4611686018450406180', '2305843009310128298');

        $this->assertInstanceOf(AdvisorActivities::class, $advisors->getActivities());
        $this->assertContainsOnlyInstancesOf(AdvisorCategory::class, $advisors->getActivityCategories());
        $this->assertContainsOnlyInstancesOf(AdvisorBounty::class, $advisors->getBounties());
        $this->assertInternalType('array', $advisors->getQuests());
        $this->assertContainsOnlyInstancesOf(SummaryCharacterLevelProgression::class, $advisors->getProgressions());
        $this->assertContainsOnlyInstancesOf(AdvisorRecordBook::class, $advisors->getRecordBooks());
    }

    /**
     * Test Get Advisors Exception
     */
    public function testGetAdvisorsException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $advisors = (new AdvisorsService())->getAdvisors(0, 'Fail', 'Fail');
    }
}
