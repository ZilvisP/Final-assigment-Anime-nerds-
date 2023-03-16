<?php

namespace App\Repositories;
use App\Models\Manga;
/**
 * Class AnimeRepository.
 */
class MangaRepository
{
    public function rateManga($user, $manga, $value)
    {
        $rate = $manga->users()->where('users.id', $user->id)->pluck('rating')->first();
        if($rate) {
            if($rate !== $value) {
                $manga->users ()->updateExistingPivot ($user->id, ['rating' => $value]);
            }
        } else {
            $manga->users ()->attach ($user->id, ['rating' => $value]);
        }
        return $rate;
    }

//every time we send information about manga from the server, we now need to add the rating.
    public function paginateAndRate($query)
    {
        $manga = $query->paginate (config ('app.pagination'));
        return $this->setRating ($manga);
    }
    public function setRating($manga)
    {
        $manga->transform(function ($manga) {
            $this->setMangaRate ($manga);
            return $manga;
        });
        return $manga;
    }
    public function setMangaRate($manga)
    {
        $number = $manga->users->count();
        $manga->rate = $number ? $manga->users->pluck ('pivot.rating')->sum () / $number : 0;
    }
//previously only paginating, we will add the rating to the manga

    public function getAllManga()
    {
        return $this->paginateAndRate (Manga::latestWithUser());
    }
    public function getMangaForCategory($slug)
    {
        $query = Manga::latestWithUser ()->whereHas ('category', function ($query) use ($slug) {
            $query->whereSlug ($slug);
        });
        return $this->paginateAndRate ($query);
    }
    public function getMangaForUser($id)
    {
        $query = Manga::latestWithUser ()->whereHas ('user', function ($query) use ($id) {
            $query->whereId ($id);
        });
        return $this->paginateAndRate ($query);
    }
    public function getImagesForAlbum($slug)
    {
        $query = Manga::latestWithUser ()->whereHas ('albums', function ($query) use ($slug) {
            $query->whereSlug ($slug);
        });
        return $this->paginateAndRate ($query);
    }
}
