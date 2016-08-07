<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireDefinition
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinition
{
    use ModelTrait;

    /**
     * @var Collection
     */
    private $themeCollection;

    /**
     * @return Collection
     */
    public function getThemeCollection()
    {
        return $this->themeCollection;
    }

    /**
     * @param Collection $themeCollection
     * @return GrimoireDefinition
     */
    public function setThemeCollection(Collection $themeCollection)
    {
        $this->themeCollection = $themeCollection;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireDefinition
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('themeCollection', null, GrimoireDefinitionTheme::class . '::toCollection');
        return $mapper->map($val);
    }
}
