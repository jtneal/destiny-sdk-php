<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;

/**
 * Class SummaryCharacterBasePeerViewTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBasePeerViewTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $view = (new SummaryCharacterBasePeerView())
            ->setEquipment(new Collection(SummaryCharacterBasePeerViewEquipment::class));

        $this->assertEquals(new Collection(SummaryCharacterBasePeerViewEquipment::class), $view->getEquipment());
    }

    /**
     * Test To Object
     */
    public function testToObject()
    {
        $object = SummaryCharacterBasePeerView::toObject(null, [
            'equipment' => []
        ]);

        $expected = (new SummaryCharacterBasePeerView())
            ->setEquipment(new Collection(SummaryCharacterBasePeerViewEquipment::class));

        $this->assertEquals($expected, $object);
    }

    /**
     * Test To Collection
     */
    public function testToCollection()
    {
        $collection = SummaryCharacterBasePeerView::toCollection(null, [
            [
                'equipment' => []
            ]
        ]);

        $expected = new Collection(SummaryCharacterBasePeerView::class, [
            (new SummaryCharacterBasePeerView())
                ->setEquipment(new Collection(SummaryCharacterBasePeerViewEquipment::class))
        ]);

        $this->assertEquals($expected, $collection);
    }
}
