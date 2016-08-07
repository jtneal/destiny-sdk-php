<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;

/**
 * Class ItemReferenceServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class ItemReferenceServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Item Reference
     */
    public function testGetItemReference()
    {
        $reference = (new ItemReferenceService())->getItemReference(2, '4611686018450406180', '2305843009310128298', 1738186005);

        $this->assertEquals(1738186005, $reference->getItemHash());
    }

    /**
     * Test Get Item Reference Exception
     */
    public function testGetItemReferenceException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $reference = (new ItemReferenceService())->getItemReference(0, 'Fail', 'Fail', 0);
    }
}
