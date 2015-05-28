# CacheUrlImage
A simple script for caching images form url

## Install

Download the latest release and place CacheUrlImage.php in your project

```php
require 'CacheUrlImage.php';
$cul = new Ama\Util\CacheUrlImage();
```

## Usage

A very basic usage example:

```php
$cul = new Ama\Util\CacheUrlImage();
$image = $cul->cache('http://www.birds.cornell.edu/AllAboutBirds/studyingbirdsi/ring_billed_1st_winter.jpg');
echo "<img src='".$image."'>";
```

## Credits

CacheUrlImage was created by [Anders Andersen](http://andersmandersen.dk). Released under the MIT license.