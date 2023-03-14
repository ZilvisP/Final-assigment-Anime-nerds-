<?php

namespace App\Http\Managers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileManager
{
    public function store($file, string $entityType): array
    {
        // Get the file extension
        $extension = $file->getClientOriginalExtension();

        // Generate a unique filename
        $filename = uniqid('', true) . '.' . $extension;

        // Save the original file to the appropriate folder
        $originalFolder = "uploads/$entityType/originals";
        $file->move(public_path($originalFolder), $filename);
        $originalPath = public_path("$originalFolder/$filename");

        // Determine the folder to save the cover, thumbnail, and avatar images in
        $folder = '';
        if ($entityType === 'anime') {
            $folder = 'uploads/anime';

        } else if ($entityType === 'manga') {
            $folder = 'uploads/manga';
        } else if ($entityType === 'user') {
            $folder = 'uploads/avatars';
        }

        // Create the cover and thumbnail versions of the image
        $coverPath = '';
        $thumbnailPath = '';
        $avatarPath = '';
        if ($entityType === 'anime' || $entityType === 'manga') {
            $coverPath = public_path("$folder/covers/$filename");
            copy($originalPath, $coverPath);
            $thumbnailPath = public_path("$folder/thumbnails/$filename");
            copy($originalPath, $thumbnailPath);

        } elseif ($entityType === 'user') {
            $avatarPath = public_path("$folder/avatars/$filename");
            copy($originalPath, $avatarPath);
        }

        // Return an array with the paths to the cover, thumbnail, and avatar versions of the image
        return [
            'cover' => $coverPath,
            'thumbnail' => $thumbnailPath,
            'avatar' => $avatarPath,
        ];
    }

    public function delete(array $paths)
    {
        foreach($paths as $path) {
            if ($path !== null) {
                Storage::delete($path);
            }
        }
    }
}
