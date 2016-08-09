<?php

namespace Necowebs\Destiny\Services;

use Necowebs\Destiny\Models\Character\AdvisorActivities;
use Necowebs\Destiny\Models\Character\AdvisorCategory;

/**
 * Class AdvisorsServiceTest
 * @package Necowebs\Destiny\Services
 */
class AdvisorsServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Advisors
     */
    public function testGetAdvisors()
    {
        $advisors = (new AdvisorsService())->getAdvisors();

        $this->assertInstanceOf(AdvisorActivities::class, $advisors->getActivities());
        $this->assertContainsOnlyInstancesOf(AdvisorCategory::class, $advisors->getActivityCategories());
    }
}
