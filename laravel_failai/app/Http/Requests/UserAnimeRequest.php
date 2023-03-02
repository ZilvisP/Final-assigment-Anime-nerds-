<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserAnimeRequest extends FormRequest
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
        $rules = [
            'anime_id' => [
                'required',
                'integer',
                Rule::exists('anime', 'id')
            ],
            'status_id' => [
                'required',
                'integer',
                Rule::exists('user_statuses', 'id')->where(function ($query) {
                    $query->where('category', 'anime');
                })
            ],
            'rating' => 'nullable|numeric|between:0,5|regex:/^[0-9](\.[05])?$/',
            'date_rated' => [
                'nullable',
                'date',
                'before_or_equal:today'
            ]
        ];

        if ($this->getMethod() == 'POST') {
            $rules['anime_id'][] = 'unique:user_anime,anime_id,NULL,id,user_id,' . auth()->user()->id;
        } elseif ($this->getMethod() == 'PUT') {
            $rules['anime_id'][] = Rule::unique('user_anime', 'anime_id')->where(function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->ignore($this->route('user_anime')->id);
        }

        return $rules;
}


    public function messages()
    {
        return [
            'status_id.required' => 'The status field is required.',
            'status_id.integer' => 'The status field must be an integer.',
            'status_id.exists' => 'The selected status is invalid.',
            'anime_id.required' => 'The anime field is required.',
            'anime_id.integer' => 'The anime field must be an integer.',
            'anime_id.exists' => 'The selected anime is invalid.',
            'anime_id.unique' => 'You already have this anime in your list.',
            'rating.integer' => 'The rating field must be an integer.',
            'rating.between' => 'The rating field must be between :min and :max.',
            'rating.regex' => 'The rating field must be in increments of 0.5.',
        ];
    }
}
