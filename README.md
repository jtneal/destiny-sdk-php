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

$activities = $advisors->getActivities(); // Instance of Necowebs\Destiny\Models\Character\AdvisorActivities
$activityCategories = $advisors->getActivityCategories(); // Traversable of Necowebs\Destiny\Models\Character\AdvisorCategory
$bounties = $advisors->getBounties(); // Traversable of Necowebs\Destiny\Models\Character\AdvisorBounty
$quests = $advisors->getQuests(); // []
$progressions = $advisors->getProgressions(); // Traversable of Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression
$recordBooks = $advisors->getRecordBooks(); // Traversable of Necowebs\Destiny\Models\Account\AdvisorRecordBook
```

**GetCharacterActivities**

```php
use Necowebs\Destiny\Services\Character\CharacterActivitiesService;

$activities = (new CharacterActivitiesService())->getCharacterActivities(2, '4611686018450406180', '2305843009310128298');

$dateActivityStarted = $activities->getDateActivityStarted(); // "2016-08-16T09:00:00Z"
$available = $activities->getAvailable(); // Traversable of Necowebs\Destiny\Models\Character\AdvisorActivityData
```

**GetCharacterInventorySummary**

```php
use Necowebs\Destiny\Services\Character\CharacterInventorySummaryService;

$summary = (new CharacterInventorySummaryService())->getCharacterInventorySummary(2, '4611686018450406180', '2305843009310128298');

$items = $this->assertContainsOnlyInstancesOf(Item::class, $summary->getItems()); // Traversable of Necowebs\Destiny\Models\Account\Item
$currencies = $summary->getCurrencies(); // Traversable of Necowebs\Destiny\Models\Account\SummaryInventoryCurrency
```

**GetCharacterProgression**

```php
use Necowebs\Destiny\Services\Character\CharacterProgressionService;

$progression = (new CharacterProgressionService())->getCharacterProgression(2, '4611686018450406180', '2305843009310128298');

$progressions = $progression->getProgressions(); // Traversable of Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression
$levelProgression = $progression->getLevelProgression(); // Instance of Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression
$baseCharacterLevel = $progression->getBaseCharacterLevel(); // 40
$isPrestigeLevel = $progression->getIsPrestigeLevel(); // false
$factionProgressionHash = $progression->getFactionProgressionHash(); // 1424722124
$percentToNextLevel = $progression->getPercentToNextLevel(); // 0
```

**GetCharacterSummary**

```php
use Necowebs\Destiny\Services\Character\CharacterSummaryService;

$summary = (new CharacterSummaryService())->getCharacterSummary(2, '4611686018450406180', '2305843009310128298');

$characterBase = $summary->getCharacterBase(); // Instance of Necowebs\Destiny\Models\Account\SummaryCharacterBase
$levelProgression = $summary->getLevelProgression(); // Instance of Necowebs\Destiny\Models\Account\SummaryCharacterLevelProgression
$emblemPath = $summary->getEmblemPath(); // "/common/destiny_content/icons/f2c6a2edc3e5b89092a43e29695e8539.jpg"
$backgroundPath = $summary->getBackgroundPath(); // "/common/destiny_content/icons/1ee9dd7b47105a319e579b16c7520920.jpg"
$emblemHash = $summary->getEmblemHash(); // 2596665931
$characterLevel = $summary->getCharacterLevel(); // 40
$baseCharacterLevel = $summary->getBaseCharacterLevel(); // 40
$isPrestigeLevel = $summary->getIsPrestigeLevel(); // false
$percentToNextLevel = $summary->getPercentToNextLevel(); // 0
```

**GetItemDetail**

```php
use Necowebs\Destiny\Services\Character\ItemDetailService;

$item = (new ItemDetailService())->getItemDetail(2, '4611686018450406180', '2305843009310128298', '6917529062368226431');

$item = $item->getItem(); // Instance of Necowebs\Destiny\Models\Character\AdvisorActivityExtendedOrderItem
$talentNodes = $item->getTalentNodes(); // Traversable of Necowebs\Destiny\Models\Character\InventoryItemTalentNode
$statsOnNodes = $item->getStatsOnNodes(); // Traversable of Necowebs\Destiny\Models\Character\InventoryItemNodeStat
$characterStatsToDisplay = $item->getCharacterStatsToDisplay(); // Traversable of Necowebs\Destiny\Models\Account\SummaryCharacterBaseStat
$materialItemHashes = $item->getMaterialItemHashes(); // Traversable of int
$materialQuantities = $item->getMaterialQuantities(); // []
```

**GetItemReferenceDetail**

```php
use Necowebs\Destiny\Services\Character\ItemReferenceDetailService;

$reference = (new ItemReferenceDetailService())->getItemReferenceDetail(2, '4611686018450406180', '2305843009310128298', 1738186005);

$itemHash = $reference->getItemHash(); // 1738186005
```

### Explorer Services

**GetDestinyExplorerItems**

```php
use Necowebs\Destiny\Services\Explorer\DestinyExplorerItemsService;

$items = (new DestinyExplorerItemsService())->getDestinyExplorerItems(['name' => 'Gjallarhorn']);

$itemHashes = $items->getItemHashes(); // Traversable of int
$totalResults = $items->getTotalResults(); // 1
$hasMore = $items->getHasMore(); // false
$query = $items->getQuery(); // Instance of Necowebs\Destiny\Models\Explorer\ItemsQuery
$useTotalResults = $items->getUseTotalResults(); // true
```

**GetDestinyExplorerTalentNodeSteps**

```php
use Necowebs\Destiny\Services\Explorer\DestinyExplorerTalentNodeStepsService;

$steps = (new DestinyExplorerTalentNodeStepsService())->getDestinyExplorerTalentNodeSteps(['name' => 'Wolfpack Rounds']);

$stepHashes = $steps->getStepHashes(); // Traversable of int
$totalResults = $steps->getTotalResults(); // 1
$hasMore = $steps->getHasMore(); // false
$query = $steps->getQuery(); // Instance of Necowebs\Destiny\Models\Explorer\ItemsQuery
$useTotalResults = $steps->getUseTotalResults(); // true
```

### Manifest Services

**GetActivityBundle**

```php
use Necowebs\Destiny\Services\Manifest\ActivityBundleService;

$bundle = (new ActivityBundleService())->getActivityBundle(2659248071);

$bundleHash = $bundle->getBundleHash(); // 2659248071
$activityName = $bundle->getActivityName(); // "Vault of Glass"
$activityDescription = $bundle->getActivityDescription(); // "Beneath Venus, evil stirs."
$icon = $bundle->getIcon(); // "/img/misc/missing_icon.png"
$releaseIcon = $bundle->getReleaseIcon(); // "/img/misc/missing_icon.png"
$releaseTime = $bundle->getReleaseTime(); // 0
$destinationHash = $bundle->getDestinationHash(); // 518553403
$placeHash = $bundle->getPlaceHash(); // 3871070152
$activityTypeHash = $bundle->getActivityTypeHash(); // 2043403989
$activityHashes = $bundle->getActivityHashes(); // Traversable of int
$hash = $bundle->getHash(); // 2659248071
$index = $bundle->getIndex(); // 0
```

**GetActivity**

```php
use Necowebs\Destiny\Services\Manifest\ActivityService;

$activity = (new ActivityService())->getActivity(2659248068);

$activityHash = $activity->getActivityHash(); // 2659248068
$activityName = $activity->getActivityName(); // "Vault of Glass"
$activityDescription = $activity->getActivityDescription(); // "Beneath Venus, evil stirs."
$icon = $activity->getIcon(); // "/common/destiny_content/icons/f2174f9413f37e3720417fffecd5524c.png"
$releaseIcon = $activity->getReleaseIcon(); // "/img/misc/missing_icon.png"
$releaseTime = $activity->getReleaseTime(); // 0
$activityLevel = $activity->getActivityLevel(); // 30
$completionFlagHash = $activity->getCompletionFlagHash(); // 2100359368
$activityPower = $activity->getActivityPower(); // 0
$minParty = $activity->getMinParty(); // 1
$maxParty = $activity->getMaxParty(); // 6
$maxPlayers = $activity->getMaxPlayers(); // 6
$destinationHash = $activity->getDestinationHash(); // 518553403
$placeHash = $activity->getPlaceHash(); // 3871070152
$activityTypeHash = $activity->getActivityTypeHash(); // 2043403989
$tier = $activity->getTier(); // 2
$pgcrImage = $activity->getPgcrImage(); // "/img/theme/destiny/bgs/pgcrs/raid_vault_of_glass.jpg"
$rewards = $activity->getRewards(); // Instance of Necowebs\Destiny\Models\Manifest\Reward 
$skulls = $activity->getSkulls(); // Instance of Necowebs\Destiny\Models\Manifest\Skull
$isPlaylist = $activity->getIsPlaylist(); // false
$isMatchmade = $activity->getIsMatchmade(); // false
$hash = $activity->getHash(); // 2659248068
$index = $activity->getIndex(); // 0
```

**GetActivityType**

```php
use Necowebs\Destiny\Services\Manifest\ActivityTypeService;

$activityType = (new ActivityTypeService())->getActivityType(3846426416);

$activityTypeHash = $activityType->getActivityTypeHash(); // 3846426416
$identifier = $activityType->getIdentifier(); // "ACTIVITY_TYPE_PVP_DOM"
$activityTypeName = $activityType->getActivityTypeName(); // "Control"
$activityTypeDescription = $activityType->getActivityTypeDescription(); // "Face your fellow Guardians in open combat. Prove your worth, and you will be rewarded."
$icon = $activityType->getIcon(); // "/common/destiny_content/icons/icon_pvp_80209e5d3802747a308bbdbe12bee676.png"
$activeBackgroundVirtualPath = $activityType->getActiveBackgroundVirtualPath(); // "/img/destiny_content/ActivityTypeBackground/Active/crucible.png"
$completedBackgroundVirtualPath = $activityType->getCompletedBackgroundVirtualPath(); // "/img/destiny_content/ActivityTypeBackground/Completed/crucible.png"
$hiddenOverrideVirtualPath = $activityType->getHiddenOverrideVirtualPath(); // "/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png"
$tooltipBackgroundVirtualPath = $activityType->getTooltipBackgroundVirtualPath(); // "/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png"
$enlargedActiveBackgroundVirtualPath = $activityType->getEnlargedActiveBackgroundVirtualPath(); // "/img/destiny_content/ActivityTypeBackground/Active/crucible.png"
$enlargedCompletedBackgroundVirtualPath = $activityType->getEnlargedCompletedBackgroundVirtualPath(); // "/img/destiny_content/ActivityTypeBackground/Completed/crucible.png"
$enlargedHiddenOverrideVirtualPath = $activityType->getEnlargedHiddenOverrideVirtualPath(); // "/img/destiny_content/ActivityTypeBackground/Hidden/crucible.png"
$enlargedTooltipBackgroundVirtualPath = $activityType->getEnlargedTooltipBackgroundVirtualPath(); // "/img/destiny_content/ActivityTypeBackground/Tooltip/crucible.png"
$order = $activityType->getOrder(); // 10
$statGroup = $activityType->getStatGroup(); // "control"
$friendlyUrlId = $activityType->getFriendlyUrlId(); // "control"
$hash = $activityType->getHash(); // 3846426416
$index = $activityType->getIndex(); // 0
```

**GetArtDyeChannel**

```php
use Necowebs\Destiny\Services\Manifest\ArtDyeChannelService;

$channel = (new ArtDyeChannelService())->getArtDyeChannel(662199250);

$channelHash = $channel->getChannelHash(); // 662199250
$index = $channel->getIndex(); // 0
$channelName = $channel->getChannelName(); // "armor"
$hash = $channel->getHash(); // 662199250
```

**GetClassDefinition**

```php
use Necowebs\Destiny\Services\Manifest\ClassDefinitionService;

$class = (new ClassDefinitionService())->getClassDefinition(2271682572);

$classHash = $class->getClassHash(); // 2271682572
$classType = $class->getClassType(); // 2
$className = $class->getClassName(); // "Warlock"
$classNameMale = $class->getClassNameMale(); // "Warlock"
$classNameFemale = $class->getClassNameFemale(); // "Warlock"
$classIdentifier = $class->getClassIdentifier(); // "CLASS_WARLOCK"
$mentorVendorIdentifier = $class->getMentorVendorIdentifier(); // "VENDOR_WARLOCK_MENTOR"
$hash = $class->getHash(); // 2271682572
$index = $class->getIndex(); // 0
```

**GetDestination**

```php
use Necowebs\Destiny\Services\Manifest\DestinationService;

$destination = (new DestinationService())->getDestination(2777041980);

$destinationHash = $destination->getDestinationHash(); // 2777041980
$destinationName = $destination->getDestinationName(); // "The Crucible"
$destinationDescription = $destination->getDestinationDescription(); // "Hone your skills and win glory in battle against other Guardians."
$icon = $destination->getIcon(); // "/common/destiny_content/icons/9a838566008cf8a8298e286d1162b185.jpg"
$placeHash = $destination->getPlaceHash(); // 4088006058
$destinationIdentifier = $destination->getDestinationIdentifier(); // "DESTINATION_CRUCIBLE"
$hash = $destination->getHash(); // 2777041980
$index = $destination->getIndex(); // 0
```

**GetDirectorBook**

```php
use Necowebs\Destiny\Services\Manifest\DirectorBookService;

$book = (new DirectorBookService())->getDirectorBook(2043310511);

$bookHash = $book->getBookHash(); // 2043310511
$bookName = $book->getBookName(); // "Ishtar Sink, Venus"
$bookDescription = $book->getBookDescription(); // ""
$bookNumber = $book->getBookNumber(); // "The jungles of Venus conceal great treasures - and terrible power."
$nodes = $book->getNodes(); // Traversable of Necowebs\Destiny\Models\Manifest\DirectorBookNode
$connections = $book->getConnections(); // Traversable of Necowebs\Destiny\Models\Manifest\DirectorBookConnection
$visible = $book->getVisible(); // false
$isOverview = $book->getIsOverview(); // false
$isDefaultExpression = $book->getIsDefaultExpression(); // Instance of Necowebs\Destiny\Models\Manifest\DirectorBookExpression
$isVisibleExpression = $book->getIsVisibleExpression(); // Instance of Necowebs\Destiny\Models\Manifest\DirectorBookExpression
$destinationHash = $book->getDestinationHash(); // 0
$hash = $book->getHash(); // 2043310511
$index = $book->getIndex(); // 0
```

**GetGender**

```php
use Necowebs\Destiny\Services\Manifest\GenderService;

$gender = (new GenderService())->getGender(2204441813);

$genderHash = $gender->getGenderHash(); // 2204441813
$genderType = $gender->getGenderType(); // 1
$genderName = $gender->getGenderName(); // "Female"
$genderDescription = $gender->getGenderDescription(); // ""
$hash = $gender->getHash(); // 2204441813
$index = $gender->getIndex(); // 0
```

**GetBucket**

```php
use Necowebs\Destiny\Services\Manifest\InventoryBucketService;

$bucket = (new InventoryBucketService())->getBucket(953998645);

$bucketHash = $bucket->getBucketHash(); // 953998645
$bucketName = $bucket->getBucketName(); // "Heavy Weapons"
$bucketDescription = $bucket->getBucketDescription(); // "Machine guns and rocket launchers."
$scope = $bucket->getScope(); // 0
$category = $bucket->getCategory(); // 3
$bucketOrder = $bucket->getBucketOrder(); // 40
$bucketIdentifier = $bucket->getBucketIdentifier(); // "BUCKET_HEAVY_WEAPON"
$itemCount = $bucket->getItemCount(); // 10
$location = $bucket->getLocation(); // 1
$hasTransferDestination = $bucket->getHasTransferDestination(); // true
$enabled = $bucket->getEnabled(); // true
$hash = $bucket->getHash(); // 953998645
$index = $bucket->getIndex(); // 0
```

**GetItem**

```php
use Necowebs\Destiny\Services\Manifest\InventoryItemService;

$item = (new InventoryItemService())->getItem(1274330687);

$itemHash = $item->getItemHash(); // 1274330687
$itemName = $item->getItemName(); // "Gjallarhorn"
$itemDescription = $item->getItemDescription(); // "\"If there is beauty in destruction, why not also in its delivery?\" - Feizel Crux"
$icon = $item->getIcon(); // "/common/destiny_content/icons/eb8377390504838c0190d8d56e70d28e.jpg"
$hasIcon = $item->getHasIcon(); // true
$secondaryIcon = $item->getSecondaryIcon(); // "/img/misc/missing_icon.png"
$actionName = $item->getActionName(); // "Dismantle"
$hasAction = $item->getHasAction(); // true
$deleteOnAction = $item->getDeleteOnAction(); // true
$tierTypeName = $item->getTierTypeName(); // "Exotic"
$tierType = $item->getTierType(); // 6
$itemTypeName = $item->getItemTypeName(); // "Rocket Launcher"
$bucketTypeHash = $item->getBucketTypeHash(); // 953998645
$primaryBaseStatHash = $item->getPrimaryBaseStatHash(); // 368428387
$stats = $item->getStats(); // Traversable of Necowebs\Destiny\Models\Manifest\InventoryItemStat
$perkHashes = $item->getPerkHashes(); // Traversable of int
$specialItemType = $item->getSpecialItemType(); // 0
$talentGridHash = $item->getTalentGridHash(); // 2786088834
$equippingBlock = $item->getEquippingBlock(); // Instance of Necowebs\Destiny\Models\Manifest\InventoryItemEquippingBlock
$hasGeometry = $item->getHasGeometry(); // true
$statGroupHash = $item->getStatGroupHash(); // 660767731
$itemLevels = $item->getItemLevels(); // Traversable of int
$qualityLevel = $item->getQualityLevel(); // 70
$equippable = $item->getEquippable(); // true
$instanced = $item->getInstanced(); // true
$rewardItemHash = $item->getRewardItemHash(); // 0
$values = $item->getValues(); // []
$itemType = $item->getItemType(); // 3
$itemSubType = $item->getItemSubType(); // 10
$classType = $item->getClassType(); // 3
$sources = $item->getSources(); // Traversable of Necowebs\Destiny\Models\Manifest\InventoryItemSource
$itemCategoryHashes = $item->getItemCategoryHashes(); // Traversable of int
$sourceHashes = $item->getSourceHashes(); // Traversable of int
$nonTransferrable = $item->getNonTransferrable(); // false
$exclusive = $item->getExclusive(); // 0
$maxStackSize = $item->getMaxStackSize(); // 1
$itemIndex = $item->getItemIndex(); // 0
$setItemHashes = $item->getSetItemHashes(); // Traversable of int
$tooltipStyle = $item->getTooltipStyle(); // ""
$questlineItemHash = $item->getQuestlineItemHash(); // 0
$needsFullCompletion = $item->getNeedsFullCompletion(); // false
$objectiveHashes = $item->getObjectiveHashes(); // Traversable of int
$allowActions = $item->getAllowActions(); // true
$questTrackingUnlockValueHash = $item->getQuestTrackingUnlockValueHash(); // 0
$bountyResetUnlockHash = $item->getBountyResetUnlockHash(); // 0
$uniquenessHash = $item->getUniquenessHash(); // 3671135542
$showActiveNodesInTooltip = $item->getShowActiveNodesInTooltip(); // false
$damageTypes = $item->getDamageTypes(); // Traversable of int
$hash = $item->getHash(); // 1274330687
$index = $item->getIndex(); // 0
```

**GetMaterialRequirement**

```php
use Necowebs\Destiny\Services\Manifest\MaterialRequirementService;

$set = (new MaterialRequirementService())->getMaterialRequirement(1621628784);

$setHash = $set->getSetHash(); // 1621628784
$materials = $set->getMaterials(); // Traversable of Necowebs\Destiny\Models\Manifest\MaterialRequirementItem
$hash = $set->getHash(); // 1621628784
$index = $set->getIndex(); // 0
```

**GetPlace**

```php
use Necowebs\Destiny\Services\Manifest\PlaceService;

$place = (new PlaceService())->getPlace(4088006058);

$placeHash = $place->getPlaceHash(); // 4088006058
$placeName = $place->getPlaceName(); // "The Crucible"
$placeDescription = $place->getPlaceDescription(); // "Hone your skills and win glory in battle against other Guardians."
$icon = $place->getIcon(); // "/img/misc/missing_icon.png"
$hash = $place->getHash(); // 4088006058
$index = $place->getIndex(); // 0
```

**GetProgression**

```php
use Necowebs\Destiny\Services\Manifest\ProgressionService;

$progression = (new ProgressionService())->getProgression(45089664);

$progressionHash = $progression->getProgressionHash(); // 45089664
$name = $progression->getName(); // "terminals"
$scope = $progression->getScope(); // 1
$repeatLastStep = $progression->getRepeatLastStep(); // true
$steps = $progression->getSteps(); // Traversable of Necowebs\Destiny\Models\Manifest\Reward
$visible = $progression->getVisible(); // true
$hash = $progression->getHash(); // 45089664
$index = $progression->getIndex(); // 0
```

**GetRace**

```php
use Necowebs\Destiny\Services\Manifest\RaceService;

$race = (new RaceService())->getRace(3887404748);

$raceHash = $race->getRaceHash(); // 3887404748
$raceType = $race->getRaceType(); // 0
$raceName = $race->getRaceName(); // "Human"
$raceNameMale = $race->getRaceNameMale(); // "Human Male"
$raceNameFemale = $race->getRaceNameFemale(); // "Human Female"
$raceDescription = $race->getRaceDescription(); // "Human"
$hash = $race->getHash(); // 3887404748
$index = $race->getIndex(); // 0
```

**GetSandboxPerk**

```php
use Necowebs\Destiny\Services\Manifest\SandboxPerkService;

$perk = (new SandboxPerkService())->getSandboxPerk(2425591494);

$perkHash = $perk->getPerkHash(); // 2425591494
$displayName = $perk->getDisplayName(); // "Grenades and Horseshoes"
$displayDescription = $perk->getDisplayDescription(); // "Rockets from this weapon will detonate early based on proximity to targets."
$displayIcon = $perk->getDisplayIcon(); // "/common/destiny_content/icons/6902d5c9cd4d297bab898130de2eb7b5.png"
$isDisplayable = $perk->getIsDisplayable(); // true
$perkGroups = $perk->getPerkGroups(); // Instance of Necowebs\Destiny\Models\Manifest\SandboxPerkGroup
$hash = $perk->getHash(); // 2425591494
$index = $perk->getIndex(); // 0
```

**GetStatGroup**

```php
use Necowebs\Destiny\Services\Manifest\StatGroupService;

$group = (new StatGroupService())->getStatGroup(1997970403);

$statGroupHash = $group->getStatGroupHash(); // 1997970403
$maximumValue = $group->getMaximumValue(); // 11
$uiPosition = $group->getUiPosition(); // 0
$scaledStats = $group->getScaledStats(); // Traversable of Necowebs\Destiny\Models\Manifest\StatGroupScaledStat
$overrides = $group->getOverrides(); // Traversable of Necowebs\Destiny\Models\Manifest\StatGroupOverride
$hash = $group->getHash(); // 1997970403
$index = $group->getIndex(); // 0
```

**GetStat**

```php
use Necowebs\Destiny\Services\Manifest\StatService;

$stat = (new StatService())->getStat(3897883278);

$statHash = $stat->getStatHash(); // 3897883278
$statName = $stat->getStatName(); // "Defense"
$statDescription = $stat->getStatDescription(); // "Reduces incoming damage from your enemies."
$icon = $stat->getIcon(); // "/img/theme/destiny/icons/icon_defense.png"
$statIdentifier = $stat->getStatIdentifier(); // "STAT_DEFENSE"
$interpolate = $stat->getInterpolate(); // false
$hash = $stat->getHash(); // 3897883278
$index = $stat->getIndex(); // 0
```

**GetTalentGrid**

```php
use Necowebs\Destiny\Services\Manifest\TalentGridService;

$grid = (new TalentGridService())->getTalentGrid(148625784);

$gridHash = $grid->getGridHash(); // 148625784
$maxGridLevel = $grid->getMaxGridLevel(); // 0
$gridLevelPerColumn = $grid->getGridLevelPerColumn(); // 0
$progressionHash = $grid->getProgressionHash(); // 3605101483
$nodes = $grid->getNodes(); // Traversable of Necowebs\Destiny\Models\Manifest\TalentGridNode
$calcMaxGridLevel = $grid->getCalcMaxGridLevel(); // 0
$calcProgressToMaxLevel = $grid->getCalcProgressToMaxLevel(); // 0
$exclusiveSets = $grid->getExclusiveSets(); // Traversable of Necowebs\Destiny\Models\Manifest\TalentGridExclusiveSet
$independentNodeIndexes = $grid->getIndependentNodeIndexes(); // Traversable of int
$hash = $grid->getHash(); // 148625784
$index = $grid->getIndex(); // 0
```

**GetUnlockFlag**

```php
use Necowebs\Destiny\Services\Manifest\UnlockFlagService;

$flag = (new UnlockFlagService())->getUnlockFlag(2100359368);

$flagHash = $flag->getFlagHash(); // 2100359368
$isOffer = $flag->getIsOffer(); // false
$unlockType = $flag->getUnlockType(); // 0
$hash = $flag->getHash(); // 2100359368
$index = $flag->getIndex(); // 0
```

**GetVendor**

```php
use Necowebs\Destiny\Services\Manifest\VendorService;

$vendor = (new VendorService())->getVendor(1575820975);

$summary = $vendor->getSummary(); // Instance of Necowebs\Destiny\Models\Manifest\VendorSummary
$acceptedItems = $vendor->getAcceptedItems(); // Traversable of int
$categories = $vendor->getCategories(); // Traversable of Necowebs\Destiny\Models\Manifest\VendorCategory
$failureStrings = $vendor->getFailureStrings(); // [null]
$unlockValueHash = $vendor->getUnlockValueHash(); // 0
$hash = $vendor->getHash(); // 1575820975
$index = $vendor->getIndex(); // 0
```

### Stats Services

**GetActivityHistory**

```php
use Necowebs\Destiny\Services\Stats\ActivityHistoryService;

$history = (new ActivityHistoryService())->getActivityHistory(2, '4611686018450406180', '2305843009310128298'); // Traversable of Necowebs\Destiny\Models\Stats\Activity
```

**GetDestinyAggregateActivityStats**

```php
use Necowebs\Destiny\Services\Stats\DestinyAggregateActivityStatsService;

$stats = (new DestinyAggregateActivityStatsService())->getDestinyAggregateActivityStats(2, '4611686018450406180', '2305843009310128298'); // Traversable of Necowebs\Destiny\Models\Stats\AggregateActivity
```

**GetHistoricalStatsDefinition**

```php
use Necowebs\Destiny\Services\Stats\HistoricalStatsDefinitionService;

$definition = (new HistoricalStatsDefinitionService())->getHistoricalStatsDefinition(); // Traversable of Necowebs\Destiny\Models\Stats\Definition
```

**GetHistoricalStatsForAccount**

```php
use Necowebs\Destiny\Services\Stats\TestHistoricalStatsForAccountService;

$account = (new HistoricalStatsForAccountService())->getHistoricalStatsForAccount(2, '4611686018450406180');

$mergedDeletedCharacters = $account->getMergedDeletedCharacters(); // Instance of Necowebs\Destiny\Models\Stats\AccountCharacter
$mergedAllCharacters = $account->getMergedAllCharacters(); // Instance of Necowebs\Destiny\Models\Stats\AccountCharacter
$characters = $account->getCharacters(); // Traversable of Necowebs\Destiny\Models\Stats\AccountCharacter
```

**GetHistoricalStats**

```php
use Necowebs\Destiny\Services\Stats\TestHistoricalStatsService;

$stats = (new HistoricalStatsService())->getHistoricalStats(2, '4611686018450406180', '2305843009310128298');

$allPvP = $stats->getAllPvP(); // Instance of Necowebs\Destiny\Models\Stats\HistoricalActivity
$patrol = $stats->getPatrol(); // Instance of Necowebs\Destiny\Models\Stats\HistoricalActivity
$raid = $stats->getRaid(); // Instance of Necowebs\Destiny\Models\Stats\HistoricalActivity
$story = $stats->getStory(); // Instance of Necowebs\Destiny\Models\Stats\HistoricalActivity
$allStrikes = $stats->getAllStrikes(); // Instance of Necowebs\Destiny\Models\Stats\HistoricalActivity
$allArena = $stats->getAllArena(); // Instance of Necowebs\Destiny\Models\Stats\HistoricalActivity
```

**GetMembershipIdByDisplayName**

```php
use Necowebs\Destiny\Services\Stats\MembershipIdByDisplayNameService;

$membershipId = (new MembershipIdByDisplayNameService())->getMembershipIdByDisplayName(2, 'Hochi_oD'); // "4611686018450406180"
```

**GetPostGameCarnageReport**

```php
use Necowebs\Destiny\Services\Stats\PostGameCarnageReportService;

$report = (new PostGameCarnageReportService())->getPostGameCarnageReport('5234554709');

$period = $report->getPeriod(); // "2016-07-13T23:15:00Z"
$activityDetails = $report->getActivityDetails(); // Instance of Necowebs\Destiny\Models\Stats\ActivityDetails
$entries = $report->getEntries(); // Traversable of Necowebs\Destiny\Models\Stats\PostGameCarnageReportEntry
$teams = $report->getTeams(); // Traversable of Necowebs\Destiny\Models\Stats\PostGameCarnageReportTeam
```

**GetUniqueWeaponHistory**

```php
use Necowebs\Destiny\Services\Stats\UniqueWeaponHistoryService;

$weapons = (new UniqueWeaponHistoryService())->getUniqueWeaponHistory(2, '4611686018450406180', '2305843009310128298'); // Traversable of Necowebs\Destiny\Models\Stats\PostGameCarnageReportEntryExtendedWeapon
```

### Vanguard Services

**GetGrimoireByMembership**

```php
use Necowebs\Destiny\Services\Vanguard\GrimoireByMembershipService;

$grimoire = (new GrimoireByMembershipService())->getGrimoireByMembership(2, '4611686018450406180');

$score = $grimoire->getScore(); // 4620
$cardCollection = $grimoire->getCardCollection(); // Traversable of Necowebs\Destiny\Models\Vanguard\GrimoireCard
$cardsToHide = $grimoire->getCardsToHide(); // Traversable of int
$bonuses = $grimoire->getBonuses(); // Traversable of Necowebs\Destiny\Models\Vanguard\GrimoireBonus
```

**GetGrimoireDefinition**

```php
use Necowebs\Destiny\Services\Vanguard\GrimoireDefinitionService;

$definition = (new GrimoireDefinitionService())->getGrimoireDefinition(); // Traversable of Necowebs\Destiny\Models\Vanguard\GrimoireDefinitionTheme
```

## License

The Destiny API SDK for PHP is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
