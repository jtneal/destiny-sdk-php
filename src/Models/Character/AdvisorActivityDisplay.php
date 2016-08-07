<?php

namespace Necowebs\Destiny\Models\Character;

use Collections\Collection;
use Necowebs\Destiny\Models\Traits\ModelTrait;
use Necowebs\Destiny\Utils\ArrayObjectMapper;
use Necowebs\Destiny\Utils\MapperHelper;

/**
 * Class AdvisorActivityDisplay
 * @package Necowebs\Destiny\Models\Character
 */
class AdvisorActivityDisplay
{
    use ModelTrait;

    /**
     * @var int
     */
    private $categoryHash;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $flavor;

    /**
     * @var string
     */
    private $advisorTypeCategory;

    /**
     * @var int
     */
    private $activityHash;

    /**
     * @var int
     */
    private $eventHash;

    /**
     * @var int
     */
    private $playlistHash;

    /**
     * @var int
     */
    private $destinationHash;

    /**
     * @var int
     */
    private $factionHash;

    /**
     * @var int
     */
    private $placeHash;

    /**
     * @var string
     */
    private $about;

    /**
     * @var string
     */
    private $status;

    /**
     * @var Collection
     */
    private $tips;

    /**
     * @var Collection
     */
    private $recruitmentIds;

    /**
     * @return int
     */
    public function getCategoryHash()
    {
        return $this->categoryHash;
    }

    /**
     * @param int $categoryHash
     * @return AdvisorActivityDisplay
     */
    public function setCategoryHash($categoryHash)
    {
        $this->categoryHash = (int) $categoryHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return AdvisorActivityDisplay
     */
    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return AdvisorActivityDisplay
     */
    public function setImage($image)
    {
        $this->image = (string) $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlavor()
    {
        return $this->flavor;
    }

    /**
     * @param string $flavor
     * @return AdvisorActivityDisplay
     */
    public function setFlavor($flavor)
    {
        $this->flavor = (string) $flavor;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvisorTypeCategory()
    {
        return $this->advisorTypeCategory;
    }

    /**
     * @param string $advisorTypeCategory
     * @return AdvisorActivityDisplay
     */
    public function setAdvisorTypeCategory($advisorTypeCategory)
    {
        $this->advisorTypeCategory = (string) $advisorTypeCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityHash()
    {
        return $this->activityHash;
    }

    /**
     * @param int $activityHash
     * @return AdvisorActivityDisplay
     */
    public function setActivityHash($activityHash)
    {
        $this->activityHash = (int) $activityHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getEventHash()
    {
        return $this->eventHash;
    }

    /**
     * @param int $eventHash
     * @return AdvisorActivityDisplay
     */
    public function setEventHash($eventHash)
    {
        $this->eventHash = (int) $eventHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlaylistHash()
    {
        return $this->playlistHash;
    }

    /**
     * @param int $playlistHash
     * @return AdvisorActivityDisplay
     */
    public function setPlaylistHash($playlistHash)
    {
        $this->playlistHash = (int) $playlistHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getDestinationHash()
    {
        return $this->destinationHash;
    }

    /**
     * @param int $destinationHash
     * @return AdvisorActivityDisplay
     */
    public function setDestinationHash($destinationHash)
    {
        $this->destinationHash = (int) $destinationHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getFactionHash()
    {
        return $this->factionHash;
    }

    /**
     * @param int $factionHash
     * @return AdvisorActivityDisplay
     */
    public function setFactionHash($factionHash)
    {
        $this->factionHash = (int) $factionHash;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlaceHash()
    {
        return $this->placeHash;
    }

    /**
     * @param int $placeHash
     * @return AdvisorActivityDisplay
     */
    public function setPlaceHash($placeHash)
    {
        $this->placeHash = (int) $placeHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param string $about
     * @return AdvisorActivityDisplay
     */
    public function setAbout($about)
    {
        $this->about = (string) $about;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return AdvisorActivityDisplay
     */
    public function setStatus($status)
    {
        $this->status = (string) $status;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getTips()
    {
        return $this->tips;
    }

    /**
     * @param Collection $tips
     * @return AdvisorActivityDisplay
     */
    public function setTips(Collection $tips)
    {
        $this->tips = $tips;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getRecruitmentIds()
    {
        return $this->recruitmentIds;
    }

    /**
     * @param Collection $recruitmentIds
     * @return AdvisorActivityDisplay
     */
    public function setRecruitmentIds(Collection $recruitmentIds)
    {
        $this->recruitmentIds = $recruitmentIds;
        return $this;
    }

    /**
     * @param mixed $obj
     * @param array $val
     * @return AdvisorActivityDisplay
     */
    public static function toObject($obj, array $val)
    {
        $mapper = (new ArrayObjectMapper(self::class))
            ->add('categoryHash')
            ->add('icon')
            ->add('image')
            ->add('flavor')
            ->add('advisorTypeCategory')
            ->add('activityHash')
            ->add('eventHash')
            ->add('playlistHash')
            ->add('destinationHash')
            ->add('factionHash')
            ->add('placeHash')
            ->add('about')
            ->add('status')
            ->add('tips', null, MapperHelper::class . '::mapArrayToCollectionString')
            ->add('recruitmentIds', null, MapperHelper::class . '::mapArrayToCollectionString');
        return $mapper->map($val);
    }
}
