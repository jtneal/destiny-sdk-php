<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;

/**
 * Class AdvisorCategoryTest
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorCategoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $category = (new AdvisorCategory())
            ->setCategoryHash(299173589);

        $this->assertEquals(299173589, $category->getCategoryHash());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = AdvisorCategory::toObject(null, [
            'categoryHash' => 299173589
        ]);

        $expected = (new AdvisorCategory())
            ->setCategoryHash(299173589);

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = AdvisorCategory::toCollection(null, [
            [
                'categoryHash' => 299173589
            ]
        ]);

        $expected = new Collection(AdvisorCategory::class, [
            (new AdvisorCategory())
                ->setCategoryHash(299173589)
        ]);

        $this->assertEquals($expected, $collection);
    }
}
