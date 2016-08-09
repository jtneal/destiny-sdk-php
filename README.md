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

## License

The Destiny API SDK for PHP is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
