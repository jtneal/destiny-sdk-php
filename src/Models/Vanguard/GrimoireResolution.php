<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireResolution
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireResolution
{
    use ModelTrait;

    /**
     * @var GrimoireImage
     */
    private $image;

    /**
     * @var GrimoireImage
     */
    private $smallImage;

    /**
     * @return GrimoireImage
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param GrimoireImage $image
     * @return GrimoireResolution
     */
    public function setImage(GrimoireImage $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return GrimoireImage
     */
    public function getSmallImage()
    {
        return $this->smallImage;
    }

    /**
     * @param GrimoireImage $smallImage
     * @return GrimoireResolution
     */
    public function setSmallImage(GrimoireImage $smallImage)
    {
        $this->smallImage = $smallImage;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireResolution
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('image', null, GrimoireImage::class . '::toObject')
            ->add('smallImage', null, GrimoireImage::class . '::toObject');
        return $mapper->map($val);
    }
}
