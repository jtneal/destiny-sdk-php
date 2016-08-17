# Destiny API SDK for PHP

[![Build Status](https://travis-ci.org/jtneal/destiny-sdk-php.svg)](https://travis-ci.org/jtneal/destiny-sdk-php)
[![Coverage Status](https://coveralls.io/repos/github/jtneal/destiny-sdk-php/badge.svg)](https://coveralls.io/github/jtneal/destiny-sdk-php)
[![Total Downloads](https://poser.pugx.org/necowebs/destiny-sdk-php/downloads)](https://packagist.org/packages/necowebs/destiny-sdk-php)
[![Latest Stable Version](https://poser.pugx.org/necowebs/destiny-sdk-php/v/stable)](https://packagist.org/packages/necowebs/destiny-sdk-php)
[![Latest Unstable Version](https://poser.pugx.org/necowebs/destiny-sdk-php/v/unstable)](https://packagist.org/packages/necowebs/destiny-sdk-php)
[![License](https://poser.pugx.org/necowebs/destiny-sdk-php/license)](https://packagist.org/packages/necowebs/destiny-sdk-php)

A PHP Client/SDK/API Wrapper for the BungieNet.Platform.DestinyServices

## Installation

Run the following command:

```shell
composer require necowebs/destiny-sdk-php
```

## Usage

### Basic Services

**GetDestinyPlayer**

```php
use Necowebs\Destiny\Services\DestinyPlayerService;

$player = (new DestinyPlayerService())->search('Hochi_oD', '2');

$membershipId = $player->getMembershipId(); // "4611686018450406180"
$membershipType = $player->getMembershipType(); // 2
$displayName = $player->getDisplayName(); // "Hochi_oD"
$iconPath = $player->getIconPath(); // "/img/theme/destiny/icons/icon_psn.png"
```

**GetPublicAdvisorsV2**

```php
use Necowebs\Destiny\Services\PublicAdvisorsV2Service;

$advisors = (new PublicAdvisorsV2Service())->getPublicAdvisorsV2();

$activities = $advisors->getActivities(); // Instance of Necowebs\Destiny\Models\Character\AdvisorActivities
$categories = $advisors->getActivityCategories(); // Traversable of Necowebs\Destiny\Models\Character\AdvisorCategory
```

### Account Services

**GetAccountSummary**

```php
use Necowebs\Destiny\Services\Account\AccountSummaryService;

$summary = (new AccountSummaryService())->getAccountSummary(2, '4611686018450406180');

$membershipId = $summary->getMembershipId(); // "4611686018450406180"
$membershipType = $summary->getMembershipType(); // 2
$characters = $summary->getCharacters(); // Traversable of Necowebs\Destiny\Models\Account\SummaryCharacter
$clanName = $summary->getClanName(); // "Char Wash"
$clanTag = $summary->getClanTag(); // "CHAR"
$inventory = $summary->getInventory(); // Instance of Necowebs\Destiny\Models\Account\SummaryInventory
$grimoireScore = $summary->getGrimoireScore(); // 4620
$versions = $summary->getVersions(); // 15
$accountState = $summary->getAccountState(); // 1
```

**GetAdvisorsForAccount**

```php
use Necowebs\Destiny\Services\Account\AdvisorsForAccountService;

$advisors = (new AdvisorsForAccountService())->getAdvisorsForAccount(2, '4611686018450406180');

$nextWeeklyReset = $advisors->getNextWeeklyReset(); // "2016-08-16T09:00:00Z"
$nextDailyReset = $advisors->getNextDailyReset(); // "2016-08-10T09:00:00Z"
$previousWeeklyReset = $advisors->getPreviousWeeklyReset(); // "2016-08-09T09:00:00Z"
$previousDailyReset = $advisors->getPreviousDailyReset(); // "2016-08-09T09:00:00Z"
$recordBooks = $advisors->getRecordBooks(); // Traversable of Necowebs\Destiny\Models\Account\AdvisorRecordBook
```

**GetAllItemsSummary**

```php
use Necowebs\Destiny\Services\Account\AllItemsSummaryService;

$summary = (new AllItemsSummaryService())->getAllItemsSummary(2, '4611686018450406180');

$items = $summary->getItems(); // Traversable of Necowebs\Destiny\Models\Account\Item
$characters = $summary->getCharacters(); // Traversable of Necowebs\Destiny\Models\Account\SummaryCharacter
```

**GetTriumphs**

```php
use Necowebs\Destiny\Services\Account\TriumphsService;

$triumphs = (new TriumphsService())->getTriumphs(2, '4611686018450406180'); // Traversable of Necowebs\Destiny\Models\Account\TriumphSet
```

### Character Services

**GetAdvisorsForCharacterV2**

```php
use Necowebs\Destiny\Services\Character\AdvisorsForCharacterV2Service;

$advisors = (new AdvisorsForCharacterV2Service())->getAdvisorsForCharacterV2(2, '4611686018450406180', '2305843009310128298');

$activities = $advisors->getActivities();
$activityCategories = $advisors->getActivityCategories();
$bounties = $advisors->getBounties();
$quests = $advisors->getQuests();
$progressions = $advisors->getProgressions();
$recordBooks = $advisors->getRecordBooks();
```

**GetCharacterActivities**

```php
use Necowebs\Destiny\Services\Character\CharacterActivitiesService;

$activities = (new CharacterActivitiesService())->getCharacterActivities(2, '4611686018450406180', '2305843009310128298');

$dateActivityStarted = $activities->getDateActivityStarted();
$available = $activities->getAvailable();
```

**GetCharacterInventorySummary**

```php
use Necowebs\Destiny\Services\Character\CharacterInventorySummaryService;

$summary = (new CharacterInventorySummaryService())->getCharacterInventorySummary(2, '4611686018450406180', '2305843009310128298');

$items = $this->assertContainsOnlyInstancesOf(Item::class, $summary->getItems());
$currencies = $summary->getCurrencies();
```

**GetCharacterProgression**

```php
use Necowebs\Destiny\Services\Character\CharacterProgressionService;

$progression = (new CharacterProgressionService())->getCharacterProgression(2, '4611686018450406180', '2305843009310128298');

$progressions = $progression->getProgressions();
$levelProgression = $progression->getLevelProgression();
$baseCharacterLevel = $progression->getBaseCharacterLevel();
$isPrestigeLevel = $progression->getIsPrestigeLevel();
$factionProgressionHash = $progression->getFactionProgressionHash();
$percentToNextLevel = $progression->getPercentToNextLevel();
```

**GetCharacterSummary**

```php
use Necowebs\Destiny\Services\Character\CharacterSummaryService;

$summary = (new CharacterSummaryService())->getCharacterSummary(2, '4611686018450406180', '2305843009310128298');

$characterBase = $summary->getCharacterBase();
$levelProgression = $summary->getLevelProgression();
$emblemPath = $summary->getEmblemPath();
$backgroundPath = $summary->getBackgroundPath();
$emblemHash = $summary->getEmblemHash();
$characterLevel = $summary->getCharacterLevel();
$baseCharacterLevel = $summary->getBaseCharacterLevel();
$isPrestigeLevel = $summary->getIsPrestigeLevel();
$percentToNextLevel = $summary->getPercentToNextLevel();
```

**GetItemDetail**

```php
use Necowebs\Destiny\Services\Character\ItemDetailService;

$item = (new ItemDetailService())->getItemDetail(2, '4611686018450406180', '2305843009310128298', '6917529062368226431');

$item = $item->getItem();
$talentNodes = $item->getTalentNodes();
$statsOnNodes = $item->getStatsOnNodes();
$characterStatsToDisplay = $item->getCharacterStatsToDisplay();
$materialItemHashes = $item->getMaterialItemHashes();
$materialQuantities = $item->getMaterialQuantities();
```

**GetItemReferenceDetail**

```php
use Necowebs\Destiny\Services\Character\ItemReferenceDetailService;

$reference = (new ItemReferenceDetailService())->getItemReferenceDetail(2, '4611686018450406180', '2305843009310128298', 1738186005);

$itemHash = $reference->getItemHash();
```

### Explorer Services

**GetDestinyExplorerItems**

```php
use Necowebs\Destiny\Services\Explorer\DestinyExplorerItemsService;

$items = (new DestinyExplorerItemsService())->getDestinyExplorerItems(['name' => 'Gjallarhorn']);

$itemHashes = $items->getItemHashes();
$totalResults = $items->getTotalResults();
$hasMore = $items->getHasMore();
$query = $items->getQuery();
$useTotalResults = $items->getUseTotalResults();
```
**GetDestinyExplorerTalentNodeSteps**

```php
use Necowebs\Destiny\Services\Explorer\DestinyExplorerTalentNodeStepsService;

$steps = (new DestinyExplorerTalentNodeStepsService())->getDestinyExplorerTalentNodeSteps(['name' => 'Wolfpack Rounds']);

$stepHashes = $steps->getStepHashes();
$totalResults = $steps->getTotalResults();
$hasMore = $steps->getHasMore();
$query = $steps->getQuery();
$useTotalResults = $steps->getUseTotalResults();
```

### Manifest Services

**GetActivityBundle**

```php
use Necowebs\Destiny\Services\Manifest\ActivityBundleService;

$bundle = (new ActivityBundleService())->getActivityBundle(2659248071);

$bundleHash = $bundle->getBundleHash();
$activityName = $bundle->getActivityName();
$activityDescription = $bundle->getActivityDescription();
$icon = $bundle->getIcon();
$releaseIcon = $bundle->getReleaseIcon();
$releaseTime = $bundle->getReleaseTime();
$destinationHash = $bundle->getDestinationHash();
$placeHash = $bundle->getPlaceHash();
$activityTypeHash = $bundle->getActivityTypeHash();
$activityHashes = $bundle->getActivityHashes();
$hash = $bundle->getHash();
$index = $bundle->getIndex();
```

**GetActivity**

```php
use Necowebs\Destiny\Services\Manifest\ActivityService;

$activity = (new ActivityService())->getActivity(2659248068);

$activityHash = $activity->getActivityHash();
$activityName = $activity->getActivityName();
$activityDescription = $activity->getActivityDescription();
$icon = $activity->getIcon();
$releaseIcon = $activity->getReleaseIcon();
$releaseTime = $activity->getReleaseTime();
$activityLevel = $activity->getActivityLevel();
$completionFlagHash = $activity->getCompletionFlagHash();
$activityPower = $activity->getActivityPower();
$minParty = $activity->getMinParty();
$maxParty = $activity->getMaxParty();
$maxPlayers = $activity->getMaxPlayers();
$destinationHash = $activity->getDestinationHash();
$placeHash = $activity->getPlaceHash();
$activityTypeHash = $activity->getActivityTypeHash();
$tier = $activity->getTier();
$pgcrImage = $activity->getPgcrImage();
$rewards = $activity->getRewards();
$skulls = $activity->getSkulls();
$isPlaylist = $activity->getIsPlaylist();
$isMatchmade = $activity->getIsMatchmade();
$hash = $activity->getHash();
$index = $activity->getIndex();
```

**GetActivityType**

```php
use Necowebs\Destiny\Services\Manifest\ActivityTypeService;

$activityType = (new ActivityTypeService())->getActivityType(3846426416);

$activityTypeHash = $activityType->getActivityTypeHash();
$identifier = $activityType->getIdentifier();
$activityTypeName = $activityType->getActivityTypeName();
$activityTypeDescription = $activityType->getActivityTypeDescription();
$icon = $activityType->getIcon();
$activeBackgroundVirtualPath = $activityType->getActiveBackgroundVirtualPath();
$completedBackgroundVirtualPath = $activityType->getCompletedBackgroundVirtualPath();
$hiddenOverrideVirtualPath = $activityType->getHiddenOverrideVirtualPath();
$tooltipBackgroundVirtualPath = $activityType->getTooltipBackgroundVirtualPath();
$enlargedActiveBackgroundVirtualPath = $activityType->getEnlargedActiveBackgroundVirtualPath();
$enlargedCompletedBackgroundVirtualPath = $activityType->getEnlargedCompletedBackgroundVirtualPath();
$enlargedHiddenOverrideVirtualPath = $activityType->getEnlargedHiddenOverrideVirtualPath();
$enlargedTooltipBackgroundVirtualPath = $activityType->getEnlargedTooltipBackgroundVirtualPath();
$order = $activityType->getOrder();
$statGroup = $activityType->getStatGroup();
$friendlyUrlId = $activityType->getFriendlyUrlId();
$hash = $activityType->getHash();
$index = $activityType->getIndex();
```

**GetArtDyeChannel**

```php
use Necowebs\Destiny\Services\Manifest\ArtDyeChannelService;

$channel = (new ArtDyeChannelService())->getArtDyeChannel(662199250);

$channelHash = $channel->getChannelHash();
$index = $channel->getIndex();
$channelName = $channel->getChannelName();
$hash = $channel->getHash();
```

**GetClassDefinition**

```php
use Necowebs\Destiny\Services\Manifest\ClassDefinitionService;

$class = (new ClassDefinitionService())->getClassDefinition(2271682572);

$classHash = $class->getClassHash();
$classType = $class->getClassType();
$className = $class->getClassName();
$classNameMale = $class->getClassNameMale();
$classNameFemale = $class->getClassNameFemale();
$classIdentifier = $class->getClassIdentifier();
$mentorVendorIdentifier = $class->getMentorVendorIdentifier();
$hash = $class->getHash();
$index = $class->getIndex();
```

**GetDestination**

```php
use Necowebs\Destiny\Services\Manifest\DestinationService;

$destination = (new DestinationService())->getDestination(2777041980);

$destinationHash = $destination->getDestinationHash();
$destinationName = $destination->getDestinationName();
$destinationDescription = $destination->getDestinationDescription();
$icon = $destination->getIcon();
$placeHash = $destination->getPlaceHash();
$destinationIdentifier = $destination->getDestinationIdentifier();
$hash = $destination->getHash();
$index = $destination->getIndex();
```

**GetDirectorBook**

```php
use Necowebs\Destiny\Services\Manifest\DirectorBookService;

$book = (new DirectorBookService())->getDirectorBook(2043310511);

$bookHash = $book->getBookHash();
$bookName = $book->getBookName();
$bookDescription = $book->getBookDescription();
$bookNumber = $book->getBookNumber();
$nodes = $book->getNodes();
$connections = $book->getConnections();
$visible = $book->getVisible();
$isOverview = $book->getIsOverview();
$isDefaultExpression = $book->getIsDefaultExpression();
$isVisibleExpression = $book->getIsVisibleExpression();
$destinationHash = $book->getDestinationHash();
$hash = $book->getHash();
$index = $book->getIndex();
```

**GetGender**

```php
use Necowebs\Destiny\Services\Manifest\GenderService;

$gender = (new GenderService())->getGender(2204441813);

$genderHash = $gender->getGenderHash();
$genderType = $gender->getGenderType();
$genderName = $gender->getGenderName();
$genderDescription = $gender->getGenderDescription();
$hash = $gender->getHash();
$index = $gender->getIndex();
```

**GetBucket**

```php
use Necowebs\Destiny\Services\Manifest\InventoryBucketService;

$bucket = (new InventoryBucketService())->getBucket(953998645);

$bucketHash = $bucket->getBucketHash();
$bucketName = $bucket->getBucketName();
$bucketDescription = $bucket->getBucketDescription();
$scope = $bucket->getScope();
$category = $bucket->getCategory();
$bucketOrder = $bucket->getBucketOrder();
$bucketIdentifier = $bucket->getBucketIdentifier();
$itemCount = $bucket->getItemCount();
$location = $bucket->getLocation();
$hasTransferDestination = $bucket->getHasTransferDestination();
$enabled = $bucket->getEnabled();
$hash = $bucket->getHash();
$index = $bucket->getIndex();
```

**GetItem**

```php
use Necowebs\Destiny\Services\Manifest\InventoryItemService;

$item = (new InventoryItemService())->getItem(1274330687);

$itemHash = $this->assertEquals(1274330687, $item->getItemHash();
$itemName = $this->assertEquals('Gjallarhorn', $item->getItemName();
$itemDescription = $this->assertEquals('"If there is beauty in destruction, why not also in its delivery?" - Feizel Crux', $item->getItemDescription();
$icon = $this->assertEquals('/common/destiny_content/icons/eb8377390504838c0190d8d56e70d28e.jpg', $item->getIcon();
$hasIcon = $this->assertEquals(true, $item->getHasIcon();
$secondaryIcon = $this->assertEquals('/img/misc/missing_icon.png', $item->getSecondaryIcon();
$actionName = $this->assertEquals('Dismantle', $item->getActionName();
$hasAction = $this->assertEquals(true, $item->getHasAction();
$deleteOnAction = $this->assertEquals(true, $item->getDeleteOnAction();
$tierTypeName = $this->assertEquals('Exotic', $item->getTierTypeName();
$tierType = $this->assertEquals(6, $item->getTierType();
$itemTypeName = $this->assertEquals('Rocket Launcher', $item->getItemTypeName();
$bucketTypeHash = $this->assertEquals(953998645, $item->getBucketTypeHash();
$primaryBaseStatHash = $this->assertEquals(368428387, $item->getPrimaryBaseStatHash();
$stats = $this->assertContainsOnlyInstancesOf(InventoryItemStat::class, $item->getStats();
$perkHashes = $this->assertEquals(new Collection('int'), $item->getPerkHashes();
$specialItemType = $this->assertEquals(0, $item->getSpecialItemType();
$talentGridHash = $this->assertEquals(2786088834, $item->getTalentGridHash();
$equippingBlock = $this->assertInstanceOf(InventoryItemEquippingBlock::class, $item->getEquippingBlock();
$hasGeometry = $this->assertEquals(true, $item->getHasGeometry();
$statGroupHash = $this->assertEquals(660767731, $item->getStatGroupHash();
$itemLevels = $this->assertEquals(new Collection('int', [20]), $item->getItemLevels();
$qualityLevel = $this->assertEquals(70, $item->getQualityLevel();
$equippable = $this->assertEquals(true, $item->getEquippable();
$instanced = $this->assertEquals(true, $item->getInstanced();
$rewardItemHash = $this->assertEquals(0, $item->getRewardItemHash();
$values = $this->assertEquals([], $item->getValues();
$itemType = $this->assertEquals(3, $item->getItemType();
$itemSubType = $this->assertEquals(10, $item->getItemSubType();
$classType = $this->assertEquals(3, $item->getClassType();
$sources = $this->assertContainsOnlyInstancesOf(InventoryItemSource::class, $item->getSources();
$itemCategoryHashes = $this->assertEquals(new Collection('int', [1, 4, 13]), $item->getItemCategoryHashes();
$sourceHashes = $this->assertEquals(new Collection('int', [113998144, 36493462, 1882189853, 686593720, 3107502809, 3870113141, 541934873, 941581325]), $item->getSourceHashes();
$nonTransferrable = $this->assertEquals(false, $item->getNonTransferrable();
$exclusive = $this->assertEquals(0, $item->getExclusive();
$maxStackSize = $this->assertEquals(1, $item->getMaxStackSize();
$itemIndex = $this->assertEquals(0, $item->getItemIndex();
$setItemHashes = $this->assertEquals(new Collection('int'), $item->getSetItemHashes();
$tooltipStyle = $this->assertEquals('', $item->getTooltipStyle();
$questlineItemHash = $this->assertEquals(0, $item->getQuestlineItemHash();
$needsFullCompletion = $this->assertEquals(false, $item->getNeedsFullCompletion();
$objectiveHashes = $this->assertEquals(new Collection('int'), $item->getObjectiveHashes();
$allowActions = $this->assertEquals(true, $item->getAllowActions();
$questTrackingUnlockValueHash = $this->assertEquals(0, $item->getQuestTrackingUnlockValueHash();
$bountyResetUnlockHash = $this->assertEquals(0, $item->getBountyResetUnlockHash();
$uniquenessHash = $this->assertEquals(3671135542, $item->getUniquenessHash();
$showActiveNodesInTooltip = $this->assertEquals(false, $item->getShowActiveNodesInTooltip();
$damageTypes = $this->assertEquals(new Collection('int', [3]), $item->getDamageTypes();
$hash = $this->assertEquals(1274330687, $item->getHash();
$index = $this->assertEquals(0, $item->getIndex();
```

**GetMaterialRequirement**

```php
use Necowebs\Destiny\Services\Manifest\MaterialRequirementService;

$set = (new MaterialRequirementService())->getMaterialRequirement(1621628784);

$setHash = $set->getSetHash();
$materials = $set->getMaterials();
$hash = $set->getHash();
$index = $set->getIndex();
```

**GetPlace**

```php
use Necowebs\Destiny\Services\Manifest\PlaceService;

$place = (new PlaceService())->getPlace(4088006058);

$placeHash = $place->getPlaceHash();
$placeName = $place->getPlaceName();
$placeDescription = $place->getPlaceDescription();
$icon = $place->getIcon();
$hash = $place->getHash();
$index = $place->getIndex();
```

**GetProgression**

```php
use Necowebs\Destiny\Services\Manifest\ProgressionService;

$progression = (new ProgressionService())->getProgression(45089664);

$progressionHash = $progression->getProgressionHash();
$name = $progression->getName();
$scope = $progression->getScope();
$repeatLastStep = $progression->getRepeatLastStep();
$steps = $progression->getSteps();
$visible = $progression->getVisible();
$hash = $progression->getHash();
$index = $progression->getIndex();
```

**GetRace**

```php
use Necowebs\Destiny\Services\Manifest\RaceService;

$race = (new RaceService())->getRace(3887404748);

$raceHash = $race->getRaceHash();
$raceType = $race->getRaceType();
$raceName = $race->getRaceName();
$raceNameMale = $race->getRaceNameMale();
$raceNameFemale = $race->getRaceNameFemale();
$raceDescription = $race->getRaceDescription();
$hash = $race->getHash();
$index = $race->getIndex();
```

**GetSandboxPerk**

```php
use Necowebs\Destiny\Services\Manifest\SandboxPerkService;

$perk = (new SandboxPerkService())->getSandboxPerk(2425591494);

$perkHash = $perk->getPerkHash();
$displayName = $perk->getDisplayName();
$displayDescription = $perk->getDisplayDescription();
$displayIcon = $perk->getDisplayIcon();
$isDisplayable = $perk->getIsDisplayable();
$perkGroups = $perk->getPerkGroups();
$hash = $perk->getHash();
$index = $perk->getIndex();
```

**GetStatGroup**

```php
use Necowebs\Destiny\Services\Manifest\StatGroupService;

$group = (new StatGroupService())->getStatGroup(1997970403);

$statGroupHash = $group->getStatGroupHash();
$maximumValue = $group->getMaximumValue();
$uiPosition = $group->getUiPosition();
$scaledStats = $group->getScaledStats();
$overrides = $group->getOverrides();
$hash = $group->getHash();
$index = $group->getIndex();
```

**GetStat**

```php
use Necowebs\Destiny\Services\Manifest\StatService;

$stat = (new StatService())->getStat(3897883278);

$statHash = $stat->getStatHash();
$statName = $stat->getStatName();
$statDescription = $stat->getStatDescription();
$icon = $stat->getIcon();
$statIdentifier = $stat->getStatIdentifier();
$interpolate = $stat->getInterpolate();
$hash = $stat->getHash();
$index = $stat->getIndex();
```

**GetTalentGrid**

```php
use Necowebs\Destiny\Services\Manifest\TalentGridService;

$grid = (new TalentGridService())->getTalentGrid(148625784);

$gridHash = $grid->getGridHash();
$maxGridLevel = $grid->getMaxGridLevel();
$gridLevelPerColumn = $grid->getGridLevelPerColumn();
$progressionHash = $grid->getProgressionHash();
$nodes = $grid->getNodes();
$calcMaxGridLevel = $grid->getCalcMaxGridLevel();
$calcProgressToMaxLevel = $grid->getCalcProgressToMaxLevel();
$exclusiveSets = $grid->getExclusiveSets();
$independentNodeIndexes = $grid->getIndependentNodeIndexes();
$hash = $grid->getHash();
$index = $grid->getIndex();
```

**GetUnlockFlag**

```php
use Necowebs\Destiny\Services\Manifest\UnlockFlagService;

$flag = (new UnlockFlagService())->getUnlockFlag(2100359368);

$flagHash = $flag->getFlagHash();
$isOffer = $flag->getIsOffer();
$unlockType = $flag->getUnlockType();
$hash = $flag->getHash();
$index = $flag->getIndex();
```

**GetVendor**

```php
use Necowebs\Destiny\Services\Manifest\VendorService;

$vendor = (new VendorService())->getVendor(1575820975);

$summary = $vendor->getSummary();
$acceptedItems = $vendor->getAcceptedItems();
$categories = $vendor->getCategories();
$failureStrings = $vendor->getFailureStrings();
$unlockValueHash = $vendor->getUnlockValueHash();
$hash = $vendor->getHash();
$index = $vendor->getIndex();
```

### Stats Services

**GetActivityHistory**

```php
use Necowebs\Destiny\Services\Stats\ActivityHistoryService;

$history = (new ActivityHistoryService())->getActivityHistory(2, '4611686018450406180', '2305843009310128298');
```

**GetDestinyAggregateActivityStats**

```php
use Necowebs\Destiny\Services\Stats\DestinyAggregateActivityStatsService;

$stats = (new DestinyAggregateActivityStatsService())->getDestinyAggregateActivityStats(2, '4611686018450406180', '2305843009310128298');
```

**GetHistoricalStatsDefinition**

```php
use Necowebs\Destiny\Services\Stats\HistoricalStatsDefinitionService;

$definition = (new HistoricalStatsDefinitionService())->getHistoricalStatsDefinition();
```

**GetHistoricalStatsForAccount**

```php
use Necowebs\Destiny\Services\Stats\TestHistoricalStatsForAccountService;

$account = (new HistoricalStatsForAccountService())->getHistoricalStatsForAccount(2, '4611686018450406180');

$mergedDeletedCharacters = $account->getMergedDeletedCharacters();
$mergedAllCharacters = $account->getMergedAllCharacters();
$characters = $account->getCharacters();
```

**GetHistoricalStats**

```php
use Necowebs\Destiny\Services\Stats\TestHistoricalStatsService;

$stats = (new HistoricalStatsService())->getHistoricalStats(2, '4611686018450406180', '2305843009310128298');

$allPvP = $stats->getAllPvP();
$patrol = $stats->getPatrol();
$raid = $stats->getRaid();
$story = $stats->getStory();
$allStrikes = $stats->getAllStrikes();
$allArena = $stats->getAllArena();
```

**GetMembershipIdByDisplayName**

```php
use Necowebs\Destiny\Services\Stats\MembershipIdByDisplayNameService;

$membershipId = (new MembershipIdByDisplayNameService())->getMembershipIdByDisplayName(2, 'Hochi_oD');
```

**GetPostGameCarnageReport**

```php
use Necowebs\Destiny\Services\Stats\PostGameCarnageReportService;

$report = (new PostGameCarnageReportService())->getPostGameCarnageReport('5234554709');

$period = $report->getPeriod();
$activityDetails = $report->getActivityDetails();
$entries = $report->getEntries();
$teams = $report->getTeams();
```

**GetUniqueWeaponHistory**

```php
use Necowebs\Destiny\Services\Stats\UniqueWeaponHistoryService;

$weapons = (new UniqueWeaponHistoryService())->getUniqueWeaponHistory(2, '4611686018450406180', '2305843009310128298');
```

### Vanguard Services

**GetGrimoireByMembership**

```php
use Necowebs\Destiny\Services\Vanguard\GrimoireByMembershipService;

$grimoire = (new GrimoireByMembershipService())->getGrimoireByMembership(2, '4611686018450406180');

$score = $grimoire->getScore();
$cardCollection = $grimoire->getCardCollection();
$cardsToHide = $grimoire->getCardsToHide();
$bonuses = $grimoire->getBonuses();
```

**GetGrimoireDefinition**

```php
use Necowebs\Destiny\Services\Vanguard\GrimoireDefinitionService;

$definition = (new GrimoireDefinitionService())->getGrimoireDefinition();
```

## License

The Destiny API SDK for PHP is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
