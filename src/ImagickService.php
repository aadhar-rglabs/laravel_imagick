<?php

namespace Aadhar\LaravelImagick;

use Imagick;

class ImagickService
{
    public function processImage($path)
    {
        $imagick = new Imagick($path);
        // Add your image processing logic here
        return $imagick;
    }
}