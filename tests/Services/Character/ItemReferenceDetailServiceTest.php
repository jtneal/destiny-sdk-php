<?php

namespace Necowebs\Destiny\Services\Character;

use Necowebs\Destiny\Exceptions\CharacterNotFoundException;

/**
 * Class ItemReferenceDetailServiceTest
 * @package Necowebs\Destiny\Services\Character
 */
class ItemReferenceDetailServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Item Reference Detail
     */
    public function testGetItemReferenceDetail()
    {
        $reference = (new ItemReferenceDetailService())->getItemReferenceDetail(2, '4611686018450406180', '2305843009310128298', 1738186005);

        $this->assertEquals(1738186005, $reference->getItemHash());
    }

    /**
     * Test Get Item Reference Detail Exception
     */
    public function testGetItemReferenceDetailException()
    {
        $this->expectException(CharacterNotFoundException::class);

        $reference = (new ItemReferenceDetailService())->getItemReferenceDetail(0, 'Fail', 'Fail', 0);
    }
}
