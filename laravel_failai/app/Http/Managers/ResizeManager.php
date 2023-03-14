<?php

namespace App\Http\Managers;

use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;

class ResizeManager
{
    public function resizeImage($path, $entityType, $imageType )
    {
        // Determine the dimensions for the image based on the image type and entity type
        if ($entityType === 'anime' || $entityType === 'manga') {
            if ($imageType === 'cover') {
                $width = 400;
                $height = 500;
            } else if ($imageType === 'thumbnail') {
                $width = 400;
                $height = 300;
            }
        } else if ($entityType === 'user') {
            $width = 300;
            $height = 300;
        }

        // Resize the image to the specified dimensions
//        $image = Image::make($path);
        $manager = new ImageManager(['driver' => 'imagick']);
        $image = $manager->make($path);
        $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        // Save the resized image
         $image->save($path);
        return $image->basePath();
    }


}
