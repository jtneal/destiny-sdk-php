<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class SkullTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class SkullTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $skull = (new Skull())
            ->setDisplayName('Heroic')
            ->setDescription('Enemies appear in greater numbers and are more aggressive.')
            ->setIcon('/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png');

        $this->assertEquals('Heroic', $skull->getDisplayName());
        $this->assertEquals('Enemies appear in greater numbers and are more aggressive.', $skull->getDescription());
        $this->assertEquals('/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png', $skull->getIcon());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = Skull::toObject(null, [
            'displayName' => 'Heroic',
            'description' => 'Enemies appear in greater numbers and are more aggressive.',
            'icon' => '/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png'
        ]);

        $expected = (new Skull())
            ->setDisplayName('Heroic')
            ->setDescription('Enemies appear in greater numbers and are more aggressive.')
            ->setIcon('/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png');

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = Skull::toCollection(null, [
            [
                'displayName' => 'Heroic',
                'description' => 'Enemies appear in greater numbers and are more aggressive.',
                'icon' => '/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png'
            ]
        ]);

        $expected = new Collection(Skull::class, [
            (new Skull())
                ->setDisplayName('Heroic')
                ->setDescription('Enemies appear in greater numbers and are more aggressive.')
                ->setIcon('/common/destiny_content/icons/b6e2de98abc156752c751060fd0f3255.png')
        ]);

        $this->assertEquals($expected, $collection);
    }
}
