<?php

namespace Necowebs\Destiny\Services\Manifest;

use Necowebs\Destiny\Exceptions\ManifestObjectNotFoundException;
use Necowebs\Destiny\Models\Manifest\DirectorBookConnection;
use Necowebs\Destiny\Models\Manifest\DirectorBookExpression;
use Necowebs\Destiny\Models\Manifest\DirectorBookNode;

/**
 * Class DirectorBookServiceTest
 * @package Necowebs\Destiny\Services\Manifest
 */
class DirectorBookServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Get Director Book
     */
    public function testGetDirectorBook()
    {
        $book = (new DirectorBookService())->getDirectorBook(2043310511);

        $this->assertEquals(2043310511, $book->getBookHash());
        $this->assertEquals('Ishtar Sink, Venus', $book->getBookName());
        $this->assertEquals('', $book->getBookDescription());
        $this->assertEquals('The jungles of Venus conceal great treasures - and terrible power.', $book->getBookNumber());
        $this->assertContainsOnlyInstancesOf(DirectorBookNode::class, $book->getNodes());
        $this->assertContainsOnlyInstancesOf(DirectorBookConnection::class, $book->getConnections());
        $this->assertEquals(false, $book->getVisible());
        $this->assertEquals(false, $book->getIsOverview());
        $this->assertInstanceOf(DirectorBookExpression::class, $book->getIsDefaultExpression());
        $this->assertInstanceOf(DirectorBookExpression::class, $book->getIsVisibleExpression());
        $this->assertEquals(0, $book->getDestinationHash());
        $this->assertEquals(2043310511, $book->getHash());
        $this->assertEquals(0, $book->getIndex());
    }

    /**
     * Test Get Activity Exception
     */
    public function testGetActivityException()
    {
        $this->expectException(ManifestObjectNotFoundException::class);

        $book = (new DirectorBookService())->getDirectorBook('Fail');
    }
}
