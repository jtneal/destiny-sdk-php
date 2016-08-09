<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;
use Necowebs\Destiny\Models\Account\AdvisorRecordBook;
use Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression;
use Necowebs\Destiny\Models\Character\AdvisorActivities;
use Necowebs\Destiny\Models\Character\AdvisorBounty;
use Necowebs\Destiny\Models\Character\AdvisorCategory;


/**
 * Class AdvisorsForCharacterV2ServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class AdvisorsForCharacterV2ServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Advisors For Character V2
     */
    public function testGetAdvisorsForCharacterV2()
    {
        $advisors = (new AdvisorsForCharacterV2Service())->getAdvisorsForCharacterV2(2, '4611686018450406180', '2305843009310128298');

        $this->assertInstanceOf(AdvisorActivities::class, $advisors->getActivities());
        $this->assertContainsOnlyInstancesOf(AdvisorCategory::class, $advisors->getActivityCategories());
        $this->assertContainsOnlyInstancesOf(AdvisorBounty::class, $advisors->getBounties());
        $this->assertInternalType('array', $advisors->getQuests());
        $this->assertContainsOnlyInstancesOf(SummaryCharacterLevelProgression::class, $advisors->getProgressions());
        $this->assertContainsOnlyInstancesOf(AdvisorRecordBook::class, $advisors->getRecordBooks());
    }

    /**
     * Test Get Advisors For Character V2 Exception
     */
    public function testGetAdvisorsForCharacterV2Exception()
    {
        $this->expectException(CharacterNotFoundException::class);

        $advisors = (new AdvisorsForCharacterV2Service())->getAdvisorsForCharacterV2(0, 'Fail', 'Fail');
    }
}
