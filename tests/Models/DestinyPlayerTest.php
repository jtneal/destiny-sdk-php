<?php

namespace Necowebs\Destiny\Models;

use Collections\Collection;

/**
 * Class DestinyPlayerTest
 * @package Necowebs\Destiny\Models
 */
class DestinyPlayerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $player = (new DestinyPlayer())
            ->setIconPath('/img/theme/destiny/icons/icon_psn.png')
            ->setMembershipType(2)
            ->setMembershipId('4611686018450406180')
            ->setDisplayName('Hochi_oD');

        $this->assertEquals('/img/theme/destiny/icons/icon_psn.png', $player->getIconPath());
        $this->assertEquals(2, $player->getMembershipType());
        $this->assertEquals('4611686018450406180', $player->getMembershipId());
        $this->assertEquals('Hochi_oD', $player->getDisplayName());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = DestinyPlayer::toObject(null, [
            'iconPath' => '/img/theme/destiny/icons/icon_psn.png',
            'membershipType' => 2,
            'membershipId' => '4611686018450406180',
            'displayName' => 'Hochi_oD'
        ]);

        $expected = (new DestinyPlayer())
            ->setIconPath('/img/theme/destiny/icons/icon_psn.png')
            ->setMembershipType(2)
            ->setMembershipId('4611686018450406180')
            ->setDisplayName('Hochi_oD');

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = DestinyPlayer::toCollection(null, [
            [
                'iconPath' => '/img/theme/destiny/icons/icon_psn.png',
                'membershipType' => 2,
                'membershipId' => '4611686018450406180',
                'displayName' => 'Hochi_oD'
            ]
        ]);

        $expected = new Collection(DestinyPlayer::class, [
            (new DestinyPlayer())
                ->setIconPath('/img/theme/destiny/icons/icon_psn.png')
                ->setMembershipType(2)
                ->setMembershipId('4611686018450406180')
                ->setDisplayName('Hochi_oD')
        ]);

        $this->assertEquals($expected, $collection);
    }
}
