<?php

namespace App\Http\Managers;

use App\Models\Manga;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MangaManager
{
    /**
     * Create a new manga.
     *
     * @param array $data
     * @param UploadedFile|null $coverImage
     * @param UploadedFile|null $thumbnailImage
     * @return Manga
     */
    public function create(array $data, ?UploadedFile $coverImage = null, ?UploadedFile $thumbnailImage = null): Manga
    {
        $manga = new Manga();
        $manga->fill($data);

        if ($coverImage) {
            $path = 'uploads/img/manga/covers';
            $sizes = [
                'thumbnail' => [200, 300],
                'cover' => [800, 1200],
            ];
            $manga->cover_image = (new FileManager)->storeImage($coverImage, $path, $sizes);
        }

        if ($thumbnailImage) {
            $path = 'uploads/img/manga/thumbnails';
            $sizes = [
                'thumbnail' => [200, 300],
                'cover' => [800, 1200],
            ];
            $manga->thumbnail_image = (new FileManager)->storeImage($thumbnailImage, $path, $sizes);
        }

        $manga->save();

        return $manga;
    }

    /**
     * Update an existing manga.
     *
     * @param Manga $manga
     * @param array $data
     * @param UploadedFile|null $coverImage
     * @param UploadedFile|null $thumbnailImage
     * @return Manga
     */
    public function update(Manga $manga, array $data, ?UploadedFile $coverImage = null, ?UploadedFile $thumbnailImage = null): Manga
    {
        $manga->fill($data);

        if ($coverImage) {
            $path = 'uploads/img/manga/covers';
            $sizes = [
                'thumbnail' => [200, 300],
                'cover' => [800, 1200],
            ];
            (new FileManager)->deleteImage($path, $manga->cover_image, $sizes);
            $manga->cover_image = (new FileManager)->storeImage($coverImage, $path, $sizes, $manga->cover_image);
        }

        if ($thumbnailImage) {
            $path = 'uploads/img/manga/thumbnails';
            $sizes = [
                'thumbnail' => [200, 300],
                'cover' => [800, 1200],
            ];
            (new FileManager)->deleteImage($path, $manga->thumbnail_image, $sizes);
            $manga->thumbnail_image = (new FileManager)->storeImage($thumbnailImage, $path, $sizes, $manga->thumbnail_image);
        }

        $manga->save();

        return $manga;
    }

    /**
     * Delete an existing manga.
     *
     * @param Manga $manga
     * @return void
     */
    public function delete(Manga $manga): void
    {
        $path = 'uploads/img/manga';
        $sizes = [
            'thumbnail' => [200, 300],
            'cover' => [800, 1200],
        ];
        (new FileManager)->deleteImage($path . '/covers', $manga->cover_image, $sizes);
        (new FileManager)->deleteImage($path . '/thumbnails', $manga->thumbnail_image, $sizes);

        $manga->delete();
    }
}
