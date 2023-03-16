<?php

namespace App\Repositories;
use App\Models\Anime;
/**
 * Class AnimeRepository.
 */
class AnimeRepository
{
    public function rateAnime($user, $anime, $value)
    {
        $rate = $anime->users()->where('users.id', $user->id)->pluck('rating')->first();
        if($rate) {
            if($rate !== $value) {
                $anime->users ()->updateExistingPivot ($user->id, ['rating' => $value]);
            }
        } else {
            $anime->users ()->attach ($user->id, ['rating' => $value]);
        }
        return $rate;
    }
//every time we send information about anime from the server, we need to add the rating.
    public function paginateAndRate($query)
    {
        $anime = $query->paginate (config ('app.pagination'));
        return $this->setRating ($anime);
    }
    public function setRating($anime)
    {
        $anime->transform(function ($anime) {
            $this->setAnimeRate($anime);
            return $anime;
        });
        return $anime;
    }
    public function setAnimeRate($anime)
    {
        $number = $anime->users->count();
        $anime->rate = $number ? $anime->users->pluck ('pivot.rating')->sum () / $number : 0;
    }
//previously only paginating, we will add the rating to the anime
    public function getAllAnime()
    {
        return $this->paginateAndRate (Anime::latestWithUser());
    }
    public function getAnimeForCategory($slug)
    {
        $query = Anime::latestWithUser ()->whereHas ('category', function ($query) use ($slug) {
            $query->whereSlug ($slug);
        });
        return $this->paginateAndRate ($query);
    }
    public function getAnimeForUser($id)
    {
        $query = Anime::latestWithUser ()->whereHas ('user', function ($query) use ($id) {
            $query->whereId ($id);
        });
        return $this->paginateAndRate ($query);
    }
    public function getImagesForAlbum($slug)
    {
        $query = Anime::latestWithUser ()->whereHas ('albums', function ($query) use ($slug) {
            $query->whereSlug ($slug);
        });
        return $this->paginateAndRate ($query);
    }

}
