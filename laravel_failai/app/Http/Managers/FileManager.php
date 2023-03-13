<?php

namespace App\Http\Managers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileManager
{
    protected $disk;

//    public function __construct()
//    {
//        $this->disk = Storage::disk('uploads');
////        $this->disk->setRoot(public_path('uploads'));
//    }

    public function store($file, string $entityType, string $imageType)
    {

        // Get the file extension
        $extension = $file->getClientOriginalExtension();

        // Generate a unique filename
        $filename = uniqid('', true) . '.' . $extension;
        $folder = '';
        // Determine the folder to save the image in based on the entity type and image type
        if ($entityType === 'anime') {
            if ($imageType === 'cover') {
                $folder = 'uploads/anime/covers';

            } else if ($imageType === 'thumbnail') {
                $folder = 'uploads/anime/thumbnails';
            }
        } else if ($entityType === 'manga') {
            if ($imageType === 'cover') {
                $folder = 'uploads/manga/covers';
            } else if ($imageType === 'thumbnail') {
                $folder = 'uploads/manga/thumbnails';
            }
        } else if ($entityType === 'user') {
            $folder = 'uploads/avatars';
        }




        // Save the file to the appropriate folder
        $file->move(public_path($folder), $filename);
        //doesn't save
        $path = public_path($folder) . '/' . $filename;



//        $path = $file->storeAs($folder, $filename);
//        $path = $file->move(public_path($folder), $filename);
//        $path = $this->disk->putFileAs($folder, $file, $filename);

        // Return the filename and path
        return $path;

//            [
//            'filename' => $filename,
//            'path' => $path
//        ];
    }

    public function delete($path)
    {
        $this->disk->delete($path);
    }

    public function getPath($path)
    {
        return $this->disk->url($path);
    }
}
