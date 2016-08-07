<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireBonusSmallImage
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireBonusSmallImage
{
    use ModelTrait;

    /**
     * @var GrimoireBonusSmallImageRect
     */
    private $rect;

    /**
     * @var string
     */
    private $sheetPath;

    /**
     * @var GrimoireBonusSmallImageRect
     */
    private $sheetSize;

    /**
     * @return GrimoireBonusSmallImageRect
     */
    public function getRect()
    {
        return $this->rect;
    }

    /**
     * @param GrimoireBonusSmallImageRect $rect
     * @return GrimoireBonusSmallImage
     */
    public function setRect(GrimoireBonusSmallImageRect $rect)
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
     * @return GrimoireBonusSmallImage
     */
    public function setSheetPath($sheetPath)
    {
        $this->sheetPath = (string) $sheetPath;
        return $this;
    }

    /**
     * @return GrimoireBonusSmallImageRect
     */
    public function getSheetSize()
    {
        return $this->sheetSize;
    }

    /**
     * @param GrimoireBonusSmallImageRect $sheetSize
     * @return GrimoireBonusSmallImage
     */
    public function setSheetSize(GrimoireBonusSmallImageRect $sheetSize)
    {
        $this->sheetSize = $sheetSize;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireBonusSmallImage
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('rect', null, GrimoireBonusSmallImageRect::class . '::toObject')
            ->add('sheetPath')
            ->add('sheetSize', null, GrimoireBonusSmallImageRect::class . '::toObject');
        return $mapper->map($val);
    }
}
