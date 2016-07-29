<?php

namespace Necowebs\Destiny\Models;

/**
 * Class DestinyDefinitionTypeTest
 * @package Necowebs\Destiny\Models
 */
class DestinyDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Destiny Definition Type Valid
     */
    public function testDestinyDefinitionTypeValid()
    {
        $type = new DestinyDefinitionType('InventoryItem');

        $this->assertEquals('InventoryItem', $type->getValue());
    }

    /**
     * Test Destiny Definition Type Invalid
     */
    public function testDestinyDefinitionTypeInvalid()
    {
        $type = new DestinyDefinitionType('fake');

        $this->assertNull($type->getValue());
    }
}
