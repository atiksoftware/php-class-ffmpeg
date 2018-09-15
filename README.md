# php-class-ffmpeg

With this class you can use FFmpeg with PHP without installing php-ffmpeg extension.

----------
## Installation

### Using Composer

```sh
composer require atiksoftware/php-class-ffmpeg
```

```php
require __DIR__.'/../vendor/autoload.php';

use \Atiksoftware\FFmpeg\FFmpeg;
$FFmpeg = new FFmpeg();
```
#### _create thumbnail_
```php
$FFmpeg->input( "Facebook.MP4" )->loglevel("debug")->output( "thumbnail.jpg" )->thumb( "1280x720" , 1, 10 )->ready();
```
