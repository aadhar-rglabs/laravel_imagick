# Laravel Imagick

Processes an image using Imagick in a Laravel application.

## Installation

1. Add the package to your `composer.json` file:

```json
{
    "require": {
        "aadha/laravel_imagick": "dev-master"
    }
}
```

2. Run composer update to install the package.
composer update

3. Add the service provider to the providers array in config/app.php:
```
<?php
'providers' => [
    // ...existing code...
    Aadhar\LaravelImagick\ImagickServiceProvider::class,
],
```

4. Add the alias to the aliases array in config/app.php:

```
<?php
'aliases' => [
    // ...existing code...
    'ImagickService' => Aadhar\LaravelImagick\ImagickService::class,
],
```

Usage
You can use the ImagickService to process images in your Laravel application. For example, you can create a route in routes/web.php to process an image:
```
<?php
use Aadhar\LaravelImagick\ImagickService;

Route::get('/process-image/{path}', function ($path) {
    $imagickService = app('imagick');
    $image = $imagickService->processImage($path);
    return response()->make($image->getImageBlob(), 200, ['Content-Type' => $image->getImageMimeType()]);
});
```

Example
Here is an example of how to use the ImagickService in a controller:

```
<?php
namespace App\Http\Controllers;

use Aadhar\LaravelImagick\ImagickService;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    protected $imagickService;

    public function __construct(ImagickService $imagickService)
    {
        $this->imagickService = $imagickService;
    }

    public function processImage($path)
    {
        $image = $this->imagickService->processImage($path);
        return response()->make($image->getImageBlob(), 200, ['Content-Type' => $image->getImageMimeType()]);
    }
}
```

5. Packagist / Composer installation
```
Packagist :
https://packagist.org/packages/aadha/laravel_imagick

Composer Installation :
composer require aadha/laravel_imagick
```

6. Minimum Requirement
```
"require": {
    "php": "^7.3|^8.0",
    "ext-imagick": "*",
    "illuminate/support": "^8.0|^9.0|^10.0",
    "aadha/laravel_imagick": "dev-main"
}
```
