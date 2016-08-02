<?php

namespace Necowebs\Destiny\Models\Manifest;

/**
 * Class DirectorBookExpressionStep
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookExpressionStep
{
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
}
