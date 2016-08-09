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

## License

The Destiny API SDK for PHP is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
