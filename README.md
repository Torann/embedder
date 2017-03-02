# Link Embedder

[![Build Status](https://travis-ci.org/torann/embedder.svg)](https://travis-ci.org/torann/embedder)
[![Latest Stable Version](https://poser.pugx.org/torann/embedder/v/stable.png)](https://packagist.org/packages/torann/embedder)
[![Total Downloads](https://poser.pugx.org/torann/embedder/downloads.png)](https://packagist.org/packages/torann/embedder)
[![Patreon donate button](https://img.shields.io/badge/patreon-donate-yellow.svg)](https://www.patreon.com/torann)
[![Donate weekly to this project using Gratipay](https://img.shields.io/badge/gratipay-donate-yellow.svg)](https://gratipay.com/~torann)
[![Donate to this project using Flattr](https://img.shields.io/badge/flattr-donate-yellow.svg)](https://flattr.com/profile/torann)
[![Donate to this project using Paypal](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4CJA2A97NPYVU)

Fetch embeddable links from text.

## Installation

### Composer

From the command line run:

```
$ composer require torann/embedder
```

## Examples

### Extracting First Valid Video

```php
$text = 'Hi, I just saw this video https://www.youtube.com/watch?v=W9cA9Z4bNzk and the http://youtu.be/dMH0bHeiddddd';
$embedder = new \Torann\Embedder\Embed();

$output = $embedder->getUrl($text);
```

Will output string:

```
//www.youtube.com/embed/W9cA9Z4bNzk
```

### Extracting All Videos

```php
$text = 'Hi, I just saw this video https://www.youtube.com/watch?v=W9cA9Z4bNzk and the http://youtu.be/dMH0bHeiddddd';
$embedder = new \Torann\Embedder\Embed();

$output = $embedder->getUrls($text);
```

Will output array:

```
[
    'https://www.youtube.com/watch?v=W9cA9Z4bNzk' => '//www.youtube.com/embed/W9cA9Z4bNzk',
    'http://youtu.be/dMH0bHeiddddd' => '//www.youtube.com/embed/dMH0bHeiddddd'
]
```

## OpenGraph

Access OpenGraph meta data of a given URL.

```php
$embedder = new \Torann\Embedder\Embed();

$output = $embedder->getMeta('http://www.rottentomatoes.com/m/771439257');
```

Will output array:

```
[
  "description" => "In this heart-pounding thriller from acclaimed writer and director Mike Flanagan (Oculus, Before I Wake), silence takes on a terrifying new dimension for a..."
  "title" => "Hush"
  "type" => "video.movie"
  "image" => "https://resizing.flixster.com/R6FvucOnw5bYh_sffSMbvFSXX2w=/220x326/v1.bTsxMTcwNDk2MDtqOzE2OTc1OzIwNDg7MjIwOzMyNg"
  "image:width" => "800"
  "image:height" => "1200"
  "url" => "http://www.rottentomatoes.com/m/771439257/"
]
```

## Change Log

**v0.0.3**

 - Add simple OpenGraph support

**v0.0.2**

 - Fix return type of single urls

**v0.0.1**

 - First release