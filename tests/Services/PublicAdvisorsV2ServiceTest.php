<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\Character\AdvisorActivities;
use Necowebs\Destiny\Models\Character\AdvisorCategory;

/**
 * Class PublicAdvisorsV2ServiceTest
 * @package Necowebs\Destiny\Services
 */
class PublicAdvisorsV2ServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Public Advisors V2
     */
    public function testGetPublicAdvisorsV2()
    {
        $advisors = (new PublicAdvisorsV2Service())->getPublicAdvisorsV2();

        $this->assertInstanceOf(AdvisorActivities::class, $advisors->getActivities());
        $this->assertContainsOnlyInstancesOf(AdvisorCategory::class, $advisors->getActivityCategories());
    }
}
