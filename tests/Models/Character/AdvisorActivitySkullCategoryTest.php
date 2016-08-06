<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\Skull;

/**
 * Class AdvisorActivitySkullCategoryTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivitySkullCategoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $category = (new AdvisorActivitySkullCategory())
            ->setTitle('Modifiers')
            ->setSkulls(new Collection(Skull::class));

        $this->assertEquals('Modifiers', $category->getTitle());
        $this->assertEquals(new Collection(Skull::class), $category->getSkulls());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorActivitySkullCategory::toObject(null, [
            'title' => 'Modifiers',
            'skulls' => []
        ]);

        $expected = (new AdvisorActivitySkullCategory())
            ->setTitle('Modifiers')
            ->setSkulls(new Collection(Skull::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorActivitySkullCategory::toCollection(null, [
            [
                'title' => 'Modifiers',
                'skulls' => []
            ]
        ]);

        $expected = new Collection(AdvisorActivitySkullCategory::class, [
            (new AdvisorActivitySkullCategory())
                ->setTitle('Modifiers')
                ->setSkulls(new Collection(Skull::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
