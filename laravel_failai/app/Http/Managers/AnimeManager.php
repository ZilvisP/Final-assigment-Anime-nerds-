<?php

namespace App\Http\Managers;

use App\Models\Anime;
use Illuminate\Foundation\Http\FormRequest;

class AnimeManager
{

    public function __construct(protected FileManager $fileManager, protected ResizeManager $resizeManager)
    {
    }

    public function createAnime($request)
    {

        $anime = new Anime;
        $anime->title = $request->title;
        $anime->description = $request->description;
        $anime->release_date  = $request->release_date;
        $anime->status_id = $request->status_id;

        if ($request->hasFile('file')) {
            $entityType = 'anime';
            $imageType = 'cover';
            $file = $request['file'];

//            $storagePath = 'uploads/' . $entityType . '/covers/';
            $path = $this->fileManager->store($file, $entityType , $imageType);


            $resizedCoverPath = $this->resizeManager->resizeImage($path, $entityType, $imageType);
            $anime->cover_image = $resizedCoverPath;

            $imageType = 'thumbnail';
            $resizedThumbnailPath = $this->resizeManager->resizeImage($path, $entityType, $imageType);
            $anime->thumbnail_image = $resizedThumbnailPath;
        }
        $anime->save();
    }

    public function updateAnime($id, $request)
    {


        $anime = Anime::find($id);

        $anime->title = $request->title;
        $anime->description = $request->description;
        $anime->release_date = $request->release_date;
        $anime->status_id = $request->status_id;

        if ($request->hasFile('image')) {
            $imageType = 'cover';
            $entityType = 'anime';
            $file = $request['file'];

//            $storagePath = 'uploads/' . $entityType . '/covers/';
            $path = $this->fileManager->store($file, $imageType, $entityType);
            $resizedCoverPath = $this->resizeManager->resizeImage($path, $entityType, $imageType);
            $this->fileManager->delete($anime->cover_image);
            $anime->cover_image = $resizedCoverPath;

            $imageType = 'thumbnail';
            $resizedThumbnailPath = $this->resizeManager->resizeImage($path, $entityType, $imageType);
            $this->fileManager->delete($anime->thumbnail_image);
            $anime->thumbnail_image = $resizedThumbnailPath;
        }

        $anime->save();
    }

    public function deleteAnime($id)
    {
        $anime = Anime::find($id);
        $this->fileManager->delete($anime->cover_image);
        $this->fileManager->delete($anime->thumbnail_image);
        $anime->delete();
    }
}
