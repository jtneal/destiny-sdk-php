<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireDefinitionTheme
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionTheme
{
    use ModelTrait;

    /**
     * @var string
     */
    private $themeId;

    /**
     * @var string
     */
    private $themeName;

    /**
     * @var string
     */
    private $themeDescription;

    /**
     * @var GrimoireResolution
     */
    private $normalResolution;

    /**
     * @var GrimoireResolution
     */
    private $highResolution;

    /**
     * @var Collection
     */
    private $pageCollection;

    /**
     * @return string
     */
    public function getThemeId()
    {
        return $this->themeId;
    }

    /**
     * @param string $themeId
     * @return GrimoireDefinitionTheme
     */
    public function setThemeId($themeId)
    {
        $this->themeId = (string) $themeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getThemeName()
    {
        return $this->themeName;
    }

    /**
     * @param string $themeName
     * @return GrimoireDefinitionTheme
     */
    public function setThemeName($themeName)
    {
        $this->themeName = (string) $themeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getThemeDescription()
    {
        return $this->themeDescription;
    }

    /**
     * @param string $themeDescription
     * @return GrimoireDefinitionTheme
     */
    public function setThemeDescription($themeDescription)
    {
        $this->themeDescription = (string) $themeDescription;
        return $this;
    }

    /**
     * @return GrimoireResolution
     */
    public function getNormalResolution()
    {
        return $this->normalResolution;
    }

    /**
     * @param GrimoireResolution $normalResolution
     * @return GrimoireDefinitionTheme
     */
    public function setNormalResolution(GrimoireResolution $normalResolution)
    {
        $this->normalResolution = $normalResolution;
        return $this;
    }

    /**
     * @return GrimoireResolution
     */
    public function getHighResolution()
    {
        return $this->highResolution;
    }

    /**
     * @param GrimoireResolution $highResolution
     * @return GrimoireDefinitionTheme
     */
    public function setHighResolution(GrimoireResolution $highResolution)
    {
        $this->highResolution = $highResolution;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPageCollection()
    {
        return $this->pageCollection;
    }

    /**
     * @param Collection $pageCollection
     * @return GrimoireDefinitionTheme
     */
    public function setPageCollection(Collection $pageCollection)
    {
        $this->pageCollection = $pageCollection;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireDefinitionTheme
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('themeId')
            ->add('themeName')
            ->add('themeDescription')
            ->add('normalResolution', null, GrimoireResolution::class . '::toObject')
            ->add('highResolution', null, GrimoireResolution::class . '::toObject')
            ->add('pageCollection', null, GrimoireDefinitionThemePage::class . '::toCollection');
        return $mapper->map($val);
    }
}
