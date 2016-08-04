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
}
