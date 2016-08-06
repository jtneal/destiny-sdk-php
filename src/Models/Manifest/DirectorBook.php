<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class DirectorBook
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBook
{
    use ModelTrait;

    /**
     * @var int
     */
    private $bookHash;

    /**
     * @var string
     */
    private $bookName;

    /**
     * @var string
     */
    private $bookDescription;

    /**
     * @var string
     */
    private $bookNumber;

    /**
     * @var Collection
     */
    private $nodes;

    /**
     * @var Collection
     */
    private $connections;

    /**
     * @var bool
     */
    private $visible;

    /**
     * @var bool
     */
    private $isOverview;

    /**
     * @var DirectorBookExpression
     */
    private $isDefaultExpression;

    /**
     * @var DirectorBookExpression
     */
    private $isVisibleExpression;

    /**
     * @var int
     */
    private $destinationHash;

    /**
     * @var int
     */
    private $hash;

    /**
     * @var int
     */
    private $index;

    /**
     * @return int
     */
    public function getBookHash()
    {
        return $this->bookHash;
    }

    /**
     * @param int $bookHash
     * @return DirectorBook
     */
    public function setBookHash($bookHash)
    {
        $this->bookHash = (int) $bookHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * @param string $bookName
     * @return DirectorBook
     */
    public function setBookName($bookName)
    {
        $this->bookName = (string) $bookName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBookDescription()
    {
        return $this->bookDescription;
    }

    /**
     * @param string $bookDescription
     * @return DirectorBook
     */
    public function setBookDescription($bookDescription)
    {
        $this->bookDescription = (string) $bookDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getBookNumber()
    {
        return $this->bookNumber;
    }

    /**
     * @param string $bookNumber
     * @return DirectorBook
     */
    public function setBookNumber($bookNumber)
    {
        $this->bookNumber = (string) $bookNumber;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * @param Collection $nodes
     * @return DirectorBook
     */
    public function setNodes(Collection $nodes)
    {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * @param Collection $connections
     * @return DirectorBook
     */
    public function setConnections(Collection $connections)
    {
        $this->connections = $connections;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return DirectorBook
     */
    public function setVisible($visible)
    {
        $this->visible = (bool) $visible;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOverview()
    {
        return $this->isOverview;
    }

    /**
     * @param bool $isOverview
     * @return DirectorBook
     */
    public function setIsOverview($isOverview)
    {
        $this->isOverview = (bool) $isOverview;
        return $this;
    }

    /**
     * @return DirectorBookExpression
     */
    public function getIsDefaultExpression()
    {
        return $this->isDefaultExpression;
    }

    /**
     * @param DirectorBookExpression $isDefaultExpression
     * @return DirectorBook
     */
    public function setIsDefaultExpression(DirectorBookExpression $isDefaultExpression)
    {
        $this->isDefaultExpression = $isDefaultExpression;
        return $this;
    }

    /**
     * @return DirectorBookExpression
     */
    public function getIsVisibleExpression()
    {
        return $this->isVisibleExpression;
    }

    /**
     * @param DirectorBookExpression $isVisibleExpression
     * @return DirectorBook
     */
    public function setIsVisibleExpression(DirectorBookExpression $isVisibleExpression)
    {
        $this->isVisibleExpression = $isVisibleExpression;
        return $this;
    }

    /**
     * @return int
     */
    public function getDestinationHash()
    {
        return $this->destinationHash;
    }

    /**
     * @param int $destinationHash
     * @return DirectorBook
     */
    public function setDestinationHash($destinationHash)
    {
        $this->destinationHash = (int) $destinationHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param int $hash
     * @return DirectorBook
     */
    public function setHash($hash)
    {
        $this->hash = (int) $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return DirectorBook
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return DirectorBook
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('bookHash')
            ->add('bookName')
            ->add('bookDescription')
            ->add('bookNumber')
            ->add('nodes', null, DirectorBookNode::class . '::toCollection')
            ->add('connections', null, DirectorBookConnection::class . '::toCollection')
            ->add('visible')
            ->add('isOverview')
            ->add('isDefaultExpression', null, DirectorBookExpression::class . '::toObject')
            ->add('isVisibleExpression', null, DirectorBookExpression::class . '::toObject')
            ->add('destinationHash')
            ->add('hash')
            ->add('index');
        return $mapper->map($val);
    }
}
