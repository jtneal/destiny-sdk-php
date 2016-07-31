<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\ActivityType;

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

        $expected = (new ActivityType())
            ->setActivityTypeHash(3846426416)
            ->setIdentifier('ACTIVITY_TYPE_PVP_DOM')
            ->setActivityTypeName('Control')
            ->setActivityTypeDescription('Face your fellow Guardians in open combat. Prove your worth, and you will be rewarded.')
            ->setIcon('/common/destiny_content/icons/icon_pvp_80209e5d3802747a308bbdbe12bee676.png')
            ->setActiveBackgroundVirtualPath('/img/destiny_content/ActivityTypeBackground/Active/crucible.png')
            ->setCompletedBackgroundVirtualPath('/img/destiny_content/ActivityTypeBackground/Completed/crucible.png')
            ->setHiddenOverrideVirtualPath('/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png')
            ->setTooltipBackgroundVirtualPath('/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png')
            ->setEnlargedActiveBackgroundVirtualPath('/img/destiny_content/ActivityTypeBackground/Active/crucible.png')
            ->setEnlargedCompletedBackgroundVirtualPath('/img/destiny_content/ActivityTypeBackground/Completed/crucible.png')
            ->setEnlargedHiddenOverrideVirtualPath('/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png')
            ->setEnlargedTooltipBackgroundVirtualPath('/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png')
            ->setOrder(10)
            ->setStatGroup('control')
            ->setFriendlyUrlId('control')
            ->setHash(3846426416)
            ->setIndex(0);

        $this->assertEquals($expected, $activityType);
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
