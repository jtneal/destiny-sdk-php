<?php

namespace Necowebs\Destiny\Models\Manifest;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class DirectorBookExpressionStep
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookExpressionStep
{
    use ModelTrait;

    /**
     * @var int
     */
    private $stepOperator;

    /**
     * @var int
     */
    private $flagHash;

    /**
     * @var int
     */
    private $valueHash;

    /**
     * @var int
     */
    private $value;

    /**
     * @return int
     */
    public function getStepOperator()
    {
        return $this->stepOperator;
    }

    /**
     * @param int $stepOperator
     * @return DirectorBookExpressionStep
     */
    public function setStepOperator($stepOperator)
    {
        $this->stepOperator = (int) $stepOperator;
        return $this;
    }

    /**
     * @return int
     */
    public function getFlagHash()
    {
        return $this->flagHash;
    }

    /**
     * @param int $flagHash
     * @return DirectorBookExpressionStep
     */
    public function setFlagHash($flagHash)
    {
        $this->flagHash = (int) $flagHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getValueHash()
    {
        return $this->valueHash;
    }

    /**
     * @param int $valueHash
     * @return DirectorBookExpressionStep
     */
    public function setValueHash($valueHash)
    {
        $this->valueHash = (int) $valueHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return DirectorBookExpressionStep
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return DirectorBookExpressionStep
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('stepOperator')
            ->add('flagHash')
            ->add('valueHash')
            ->add('value');
        return $mapper->map($val);
    }
}
