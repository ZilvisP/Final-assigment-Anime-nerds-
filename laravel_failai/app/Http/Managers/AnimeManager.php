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
            $file = $request->file('file');

            $path = $this->fileManager->store($file, $entityType);

            $resizedCoverPath = $this->resizeManager->resizeImage($path['cover'], $entityType, 'cover');
            $anime->cover_image = $resizedCoverPath;

            $resizedThumbnailPath = $this->resizeManager->resizeImage($path['thumbnail'], $entityType, 'thumbnail');
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

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $entityType = 'anime';

            $path = $this->fileManager->store($file, $entityType);

            $resizedCoverPath = $this->resizeManager->resizeImage($path['cover'], $entityType, 'cover');
            $this->fileManager->delete([$anime->cover_image]);
            $anime->cover_image = $resizedCoverPath;

            $resizedThumbnailPath = $this->resizeManager->resizeImage($path['thumbnail'], $entityType, 'thumbnail');
            $this->fileManager->delete([$anime->thumbnail_image]);
            $anime->thumbnail_image = $resizedThumbnailPath;
        }

        $anime->save();
    }

    public function deleteAnime($id)
    {
        $anime = Anime::find($id);
        $this->fileManager->delete([$anime->cover_image, $anime->thumbnail_image]);
        $anime->delete();
    }
}
