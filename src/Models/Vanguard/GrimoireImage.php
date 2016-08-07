<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireImage
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireImage
{
    use ModelTrait;

    /**
     * @var GrimoireImageRect
     */
    private $rect;

    /**
     * @var string
     */
    private $sheetPath;

    /**
     * @var GrimoireImageRect
     */
    private $sheetSize;

    /**
     * @return GrimoireImageRect
     */
    public function getRect()
    {
        return $this->rect;
    }

    /**
     * @param GrimoireImageRect $rect
     * @return GrimoireImage
     */
    public function setRect(GrimoireImageRect $rect)
    {
        $this->rect = $rect;
        return $this;
    }

    /**
     * @return string
     */
    public function getSheetPath()
    {
        return $this->sheetPath;
    }

    /**
     * @param string $sheetPath
     * @return GrimoireImage
     */
    public function setSheetPath($sheetPath)
    {
        $this->sheetPath = (string) $sheetPath;
        return $this;
    }

    /**
     * @return GrimoireImageRect
     */
    public function getSheetSize()
    {
        return $this->sheetSize;
    }

    /**
     * @param GrimoireImageRect $sheetSize
     * @return GrimoireImage
     */
    public function setSheetSize(GrimoireImageRect $sheetSize)
    {
        $this->sheetSize = $sheetSize;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireImage
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('rect', null, GrimoireImageRect::class . '::toObject')
            ->add('sheetPath')
            ->add('sheetSize', null, GrimoireImageRect::class . '::toObject');
        return $mapper->map($val);
    }
}
