<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Manifest\Skull;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class AdvisorActivitySkullCategory
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivitySkullCategory
{
    use ModelTrait;

    /**
     * @var string
     */
    private $title;

    /**
     * Necowebs\Destiny\Models\Manifest\Skull
     * @var Collection
     */
    private $skulls;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return AdvisorActivitySkullCategory
     */
    public function setTitle($title)
    {
        $this->title = (string) $title;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getSkulls()
    {
        return $this->skulls;
    }

    /**
     * @param Collection $skulls
     * @return AdvisorActivitySkullCategory
     */
    public function setSkulls(Collection $skulls)
    {
        $this->skulls = $skulls;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivitySkullCategory
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('title')
            ->add('skulls', null, Skull::class . '::toCollection');
        return $mapper->map($val);
    }
}
