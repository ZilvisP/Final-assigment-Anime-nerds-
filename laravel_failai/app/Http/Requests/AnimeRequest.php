<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AnimeRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required',
            'release_date' => 'nullable|date',
            'finish_date' => 'nullable|date',
            'episodes' => 'nullable|integer|min:1',
            'status_id' => 'required|exists:global_statuses,id',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ];
    }
}
