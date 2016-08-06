<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class ActivityTypeTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class ActivityTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activityType = (new ActivityType())
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
     * Test To Object
     */
    public function testToObject()
    {
        $object = ActivityType::toObject(null, [
            'activityTypeHash' => 3846426416,
            'identifier' => 'ACTIVITY_TYPE_PVP_DOM',
            'activityTypeName' => 'Control',
            'activityTypeDescription' => 'Face your fellow Guardians in open combat. Prove your worth, and you will be rewarded.',
            'icon' => '/common/destiny_content/icons/icon_pvp_80209e5d3802747a308bbdbe12bee676.png',
            'activeBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Active/crucible.png',
            'completedBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Completed/crucible.png',
            'hiddenOverrideVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png',
            'tooltipBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png',
            'enlargedActiveBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Active/crucible.png',
            'enlargedCompletedBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Completed/crucible.png',
            'enlargedHiddenOverrideVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png',
            'enlargedTooltipBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png',
            'order' => 10,
            'statGroup' => 'control',
            'friendlyUrlId' => 'control',
            'hash' => 3846426416,
            'index' => 0
        ]);

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

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = ActivityType::toCollection(null, [
            [
                'activityTypeHash' => 3846426416,
                'identifier' => 'ACTIVITY_TYPE_PVP_DOM',
                'activityTypeName' => 'Control',
                'activityTypeDescription' => 'Face your fellow Guardians in open combat. Prove your worth, and you will be rewarded.',
                'icon' => '/common/destiny_content/icons/icon_pvp_80209e5d3802747a308bbdbe12bee676.png',
                'activeBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Active/crucible.png',
                'completedBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Completed/crucible.png',
                'hiddenOverrideVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png',
                'tooltipBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png',
                'enlargedActiveBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Active/crucible.png',
                'enlargedCompletedBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Completed/crucible.png',
                'enlargedHiddenOverrideVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png',
                'enlargedTooltipBackgroundVirtualPath' => '/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png',
                'order' => 10,
                'statGroup' => 'control',
                'friendlyUrlId' => 'control',
                'hash' => 3846426416,
                'index' => 0
            ]
        ]);

        $expected = new Collection(ActivityType::class, [
            (new ActivityType())
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
                ->setIndex(0)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
