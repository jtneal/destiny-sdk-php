<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorActivityTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $activity = (new AdvisorActivity())
            ->setIdentifier('trials')
            ->setStatus(new AdvisorActivityStatus())
            ->setDisplay(new AdvisorActivityDisplay())
            ->setCompletion((new AdvisorActivityCompletion()))
            ->setVendorHash(2668878854)
            ->setProgressionHash(3233510749)
            ->setBountyHashes(new Collection('int', [1, 2, 3, 4]))
            ->setQuestHashes(new Collection('int', [5, 6, 7, 8]))
            ->setActivityTiers(new Collection(AdvisorActivityTier::class))
            ->setExtended(new AdvisorActivityExtended());

        $this->assertEquals('trials', $activity->getIdentifier());
        $this->assertEquals(new AdvisorActivityStatus(), $activity->getStatus());
        $this->assertEquals(new AdvisorActivityDisplay(), $activity->getDisplay());
        $this->assertEquals((new AdvisorActivityCompletion()), $activity->getCompletion());
        $this->assertEquals(2668878854, $activity->getVendorHash());
        $this->assertEquals(3233510749, $activity->getProgressionHash());
        $this->assertEquals(new Collection('int', [1, 2, 3, 4]), $activity->getBountyHashes());
        $this->assertEquals(new Collection('int', [5, 6, 7, 8]), $activity->getQuestHashes());
        $this->assertEquals(new Collection(AdvisorActivityTier::class), $activity->getActivityTiers());
        $this->assertEquals(new AdvisorActivityExtended(), $activity->getExtended());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivity::toObject(null, [
            'identifier' => 'trials',
            'status' => [],
            'display' => [],
            'completion' => [],
            'vendorHash' => 2668878854,
            'progressionHash' => 3233510749,
            'bountyHashes' => [1, 2, 3, 4],
            'questHashes' => [5, 6, 7, 8],
            'activityTiers' => [],
            'extended' => []
        ]);

        $expected = (new AdvisorActivity())
            ->setIdentifier('trials')
            ->setStatus(new AdvisorActivityStatus())
            ->setDisplay(new AdvisorActivityDisplay())
            ->setCompletion((new AdvisorActivityCompletion()))
            ->setVendorHash(2668878854)
            ->setProgressionHash(3233510749)
            ->setBountyHashes(new Collection('int', [1, 2, 3, 4]))
            ->setQuestHashes(new Collection('int', [5, 6, 7, 8]))
            ->setActivityTiers(new Collection(AdvisorActivityTier::class))
            ->setExtended(new AdvisorActivityExtended());

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivity::toCollection(null, [
            [
                'identifier' => 'trials',
                'status' => [],
                'display' => [],
                'completion' => [],
                'vendorHash' => 2668878854,
                'progressionHash' => 3233510749,
                'bountyHashes' => [1, 2, 3, 4],
                'questHashes' => [5, 6, 7, 8],
                'activityTiers' => [],
                'extended' => []
            ]
        ]);

        $expected = new Collection(AdvisorActivity::class, [
            (new AdvisorActivity())
                ->setIdentifier('trials')
                ->setStatus(new AdvisorActivityStatus())
                ->setDisplay(new AdvisorActivityDisplay())
                ->setCompletion((new AdvisorActivityCompletion()))
                ->setVendorHash(2668878854)
                ->setProgressionHash(3233510749)
                ->setBountyHashes(new Collection('int', [1, 2, 3, 4]))
                ->setQuestHashes(new Collection('int', [5, 6, 7, 8]))
                ->setActivityTiers(new Collection(AdvisorActivityTier::class))
                ->setExtended(new AdvisorActivityExtended())
        ]);

        $this->assertEquals($expected, $collection);
    }
}
