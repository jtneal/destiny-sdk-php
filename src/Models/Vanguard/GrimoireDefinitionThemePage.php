<?php

namespace Necowebs\Destiny\Models\Vanguard;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;

/**
 * Class GrimoireDefinitionThemePage
 * @package Necowebs\Destiny\Models\Vanguard
 */
class GrimoireDefinitionThemePage
{
    use ModelTrait;

    /**
     * @var string
     */
    private $pageId;

    /**
     * @var string
     */
    private $pageName;

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
    private $cardCollection;

    /**
     * @var Collection
     */
    private $cardBriefs;

    /**
     * @return string
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * @param string $pageId
     * @return GrimoireDefinitionThemePage
     */
    public function setPageId($pageId)
    {
        $this->pageId = (string) $pageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * @param string $pageName
     * @return GrimoireDefinitionThemePage
     */
    public function setPageName($pageName)
    {
        $this->pageName = (string) $pageName;
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
     * @return GrimoireDefinitionThemePage
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
     * @return GrimoireDefinitionThemePage
     */
    public function setHighResolution(GrimoireResolution $highResolution)
    {
        $this->highResolution = $highResolution;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCardCollection()
    {
        return $this->cardCollection;
    }

    /**
     * @param Collection $cardCollection
     * @return GrimoireDefinitionThemePage
     */
    public function setCardCollection(Collection $cardCollection)
    {
        $this->cardCollection = $cardCollection;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getCardBriefs()
    {
        return $this->cardBriefs;
    }

    /**
     * @param Collection $cardBriefs
     * @return GrimoireDefinitionThemePage
     */
    public function setCardBriefs(Collection $cardBriefs)
    {
        $this->cardBriefs = $cardBriefs;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return GrimoireDefinitionThemePage
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('pageId')
            ->add('pageName')
            ->add('normalResolution', null, GrimoireResolution::class . '::toObject')
            ->add('highResolution', null, GrimoireResolution::class . '::toObject')
            ->add('cardCollection', null, GrimoireDefinitionThemePageCard::class . '::toCollection')
            ->add('cardBriefs', null, GrimoireDefinitionThemePageCardBrief::class . '::toCollection');
        return $mapper->map($val);
    }
}
