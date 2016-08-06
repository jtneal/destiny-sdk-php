<?php

namespace Necowebs\Destiny\Models\Manifest;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class DirectorBookExpression
 * @package Necowebs\Destiny\Models\Manifest
 */
class DirectorBookExpression
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $steps;

    /**
     * @return Collection
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param Collection $steps
     * @return DirectorBookExpression
     */
    public function setSteps(Collection $steps)
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return DirectorBookExpression
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('steps', null, DirectorBookExpressionStep::class . '::toCollection');
        return $mapper->map($val);
    }
}
