<?php

namespace App\Http\Managers;

use Illuminate\Foundation\Http\FormRequest;

class MediaManager
{
    protected string $entityType;

    public function __construct(protected FileManager $fileManager, protected ResizeManager $resizeManager)
    {
    }

    public function create($request)
    {
        $media = new static::$model;
        $media->title = $request->title;
        $media->description = $request->description;
        $media->release_date  = $request->release_date;
        $media->finish_date  = $request->finish_date;
        $media->status_id = $request->status_id;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $this->fileManager->store($file, $this->entityType);

            $resizedCoverPath = $this->resizeManager->resizeImage($path['cover'], $this->entityType, 'cover');
            $media->cover_image = $resizedCoverPath;

            $resizedThumbnailPath = $this->resizeManager->resizeImage($path['thumbnail'], $this->entityType, 'thumbnail');
            $media->thumbnail_image = $resizedThumbnailPath;
        }

        $this->setMediaSpecificProperties($media, $request);

        $media->save();

        return $media;
    }

    public function update($id, $request)
    {
        $media = static::$model::find($id);
        $media->title = $request->title;
        $media->description = $request->description;
        $media->release_date  = $request->release_date;
        $media->finish_date  = $request->finish_date;
        $media->status_id = $request->status_id;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $this->fileManager->store($file, $this->entityType);

            $resizedCoverPath = $this->resizeManager->resizeImage($path['cover'], $this->entityType, 'cover');
            $this->fileManager->delete([$media->cover_image]);
            $media->cover_image = $resizedCoverPath;

            $resizedThumbnailPath = $this->resizeManager->resizeImage($path['thumbnail'], $this->entityType, 'thumbnail');
            $this->fileManager->delete([$media->thumbnail_image]);
            $media->thumbnail_image = $resizedThumbnailPath;
        }

        $this->setMediaSpecificProperties($media, $request);

        $media->save();
    }

    public function delete($id)
    {
        $media = static::$model::find($id);
        $this->fileManager->delete([$media->cover_image, $media->thumbnail_image]);
        $media->delete();
    }

    protected function setMediaSpecificProperties($media, $request)
    {
        // Override in classes if necessary. Takes whats missing from managers. Inserting over create/update
    }
}
