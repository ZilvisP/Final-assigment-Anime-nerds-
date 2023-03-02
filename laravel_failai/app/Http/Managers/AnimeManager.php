<?php

namespace App\Http\Managers;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Collection;

class AnimeManager
{
    /**
     * Get all anime.
     *
     * @return Collection
     */
    public function getAllAnime()
    {
        return Anime::all();
    }

    /**
     * Get an anime by ID.
     *
     * @param int $id
     * @return Anime
     */
    public function getAnimeById($id)
    {
        return Anime::findOrFail($id);
    }

    /**
     * Create a new anime.
     *
     * @param array $data
     * @return Anime
     */
    public function createAnime(array $data)
    {
        return Anime::create($data);
    }

    /**
     * Update an anime by ID.
     *
     * @param int $id
     * @param array $data
     * @return void
     */
    public function updateAnime($id, array $data)
    {
        $anime = $this->getAnimeById($id);

        if (isset($data['cover_image'])) {
            (new FileManager)->deleteImage('uploads/img/anime/covers', $anime->cover_image, [
                'thumbnail' => [200, 300],
                'cover' => [800, 1200],
            ]);

            $anime->cover_image = (new FileManager)->storeImage($data['cover_image'], 'uploads/img/anime/covers', [
                'thumbnail' => [200, 300],
                'cover' => [800, 1200],
            ], $anime->cover_image);
        }

        if (isset($data['thumbnail_image'])) {
            (new FileManager)->deleteImage('uploads/img/anime/thumbnails', $anime->thumbnail_image, [
                'thumbnail' => [200, 300],
                'cover' => [800, 1200],
            ]);

            $anime->thumbnail_image = (new FileManager)->storeImage($data['thumbnail_image'], 'uploads/img/anime/thumbnails', [
                'thumbnail' => [200, 300],
                'cover' => [800, 1200],
            ], $anime->thumbnail_image);
        }

        $anime->update($data);
    }

    /**
     * Delete an anime by ID.
     *
     * @param int $id
     * @return void
     */
    public function deleteAnime($id)
    {
        $anime = $this->getAnimeById($id);

        (new FileManager)->deleteImage('uploads/img/anime/covers', $anime->cover_image, [
            'thumbnail' => [200, 300],
            'cover' => [800, 1200],
        ]);

        (new FileManager)->deleteImage('uploads/img/anime/thumbnails', $anime->thumbnail_image, [
            'thumbnail' => [200, 300],
            'cover' => [800, 1200],
        ]);

        $anime->delete();
    }
}
