<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AnimeMangaGenreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'anime_id' => 'required_without:manga_id|exists:anime,id',
            'manga_id' => 'required_without:anime_id|exists:manga,id',
            'genre_id' => 'required|exists:genres,id',
        ];
    }
}
