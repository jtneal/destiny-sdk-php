<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;

/**
 * Class DirectorBookTest
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Getters and Setters
     */
    public function testGettersAndSetters()
    {
        $book = (new DirectorBook())
            ->setBookHash(2043310511)
            ->setBookName('Ishtar Sink, Venus')
            ->setBookDescription('')
            ->setBookNumber('The jungles of Venus conceal great treasures - and terrible power.')
            ->setNodes(new Collection(DirectorBookNode::class))
            ->setConnections(new Collection(DirectorBookConnection::class))
            ->setVisible(false)
            ->setIsOverview(false)
            ->setIsDefaultExpression(new DirectorBookExpression())
            ->setIsVisibleExpression(new DirectorBookExpression())
            ->setDestinationHash(0)
            ->setHash(2043310511)
            ->setIndex(0);

        $this->assertEquals(2043310511, $book->getBookHash());
        $this->assertEquals('Ishtar Sink, Venus', $book->getBookName());
        $this->assertEquals('', $book->getBookDescription());
        $this->assertEquals('The jungles of Venus conceal great treasures - and terrible power.', $book->getBookNumber());
        $this->assertEquals(new Collection(DirectorBookNode::class), $book->getNodes());
        $this->assertEquals(new Collection(DirectorBookConnection::class), $book->getConnections());
        $this->assertEquals(false, $book->getVisible());
        $this->assertEquals(false, $book->getIsOverview());
        $this->assertEquals(new DirectorBookExpression(), $book->getIsDefaultExpression());
        $this->assertEquals(new DirectorBookExpression(), $book->getIsVisibleExpression());
        $this->assertEquals(0, $book->getDestinationHash());
        $this->assertEquals(2043310511, $book->getHash());
        $this->assertEquals(0, $book->getIndex());
    }
}
