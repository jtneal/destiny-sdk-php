<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;

/**
 * Class ActivityTypeServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class ActivityTypeServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get ActivityType
     */
    public function testGetActivityType()
    {
        $activityType = (new ActivityTypeService())->getActivityType(3846426416);

        $this->assertEquals(3846426416, $activityType->getActivityTypeHash());
        $this->assertEquals('ACTIVITY_TYPE_PVP_DOM', $activityType->getIdentifier());
        $this->assertEquals('Control', $activityType->getActivityTypeName());
        $this->assertEquals('Face your fellow Guardians in open combat. Prove your worth, and you will be rewarded.', $activityType->getActivityTypeDescription());
        $this->assertEquals('/common/destiny_content/icons/icon_pvp_80209e5d3802747a308bbdbe12bee676.png', $activityType->getIcon());
        $this->assertEquals('/img/destiny_content/ActivityTypeBackground/Active/crucible.png', $activityType->getActiveBackgroundVirtualPath());
        $this->assertEquals('/img/destiny_content/ActivityTypeBackground/Completed/crucible.png', $activityType->getCompletedBackgroundVirtualPath());
        $this->assertEquals('/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png', $activityType->getHiddenOverrideVirtualPath());
        $this->assertEquals('/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png', $activityType->getTooltipBackgroundVirtualPath());
        $this->assertEquals('/img/destiny_content/ActivityTypeBackground/Active/crucible.png', $activityType->getEnlargedActiveBackgroundVirtualPath());
        $this->assertEquals('/img/destiny_content/ActivityTypeBackground/Completed/crucible.png', $activityType->getEnlargedCompletedBackgroundVirtualPath());
        $this->assertEquals('/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png', $activityType->getEnlargedHiddenOverrideVirtualPath());
        $this->assertEquals('/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png', $activityType->getEnlargedTooltipBackgroundVirtualPath());
        $this->assertEquals(10, $activityType->getOrder());
        $this->assertEquals('control', $activityType->getStatGroup());
        $this->assertEquals('control', $activityType->getFriendlyUrlId());
        $this->assertEquals(3846426416, $activityType->getHash());
        $this->assertEquals(0, $activityType->getIndex());
    }

    /**
     * Test Get Activity Type Exception
     */
    public function testGetActivityTypeException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $activityType = (new ActivityTypeService())->getActivityType('Fail');
    }
}
