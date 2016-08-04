<?php

namespace Necowebs\Destiny\Models\Account;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\InventoryItemDye;

/**
 * Class SummaryCharacterBasePeerViewEquipmentTest
 * @package Necowebs\Destiny\Models\Account
 */
class SummaryCharacterBasePeerViewEquipmentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $equipment = (new SummaryCharacterBasePeerViewEquipment())
            ->setItemHash(1846107924)
            ->setDyes(new Collection(InventoryItemDye::class));

        $this->assertEquals(1846107924, $equipment->getItemHash());
        $this->assertEquals(new Collection(InventoryItemDye::class), $equipment->getDyes());
    }
}
