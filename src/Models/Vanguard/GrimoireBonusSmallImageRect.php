<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireBonusSmallImageRect
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireBonusSmallImageRect
{
    use ModelTrait;

    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $width;

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $x
     * @return GrimoireBonusSmallImageRect
     */
    public function setX($x)
    {
        $this->x = (int) $x;
        return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param int $y
     * @return GrimoireBonusSmallImageRect
     */
    public function setY($y)
    {
        $this->y = (int) $y;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return GrimoireBonusSmallImageRect
     */
    public function setHeight($height)
    {
        $this->height = (int) $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return GrimoireBonusSmallImageRect
     */
    public function setWidth($width)
    {
        $this->width = (int) $width;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireBonusSmallImageRect
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('x')
            ->add('y')
            ->add('height')
            ->add('width');
        return $mapper->map($val);
    }
}
