<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UserMangaRequest extends FormRequest
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
            'manga_id' => [
                'required',
                'integer',
                Rule::exists('manga', 'id')
            ],
            'status_id' => [
                'required',
                'integer',
                Rule::exists('user_statuses', 'id')->where(function ($query) {
                    $query->where('category', 'manga');
                })
            ],
            'rating' => 'nullable|integer|min:1|max:5',
            'date_rated' => [
                'nullable',
                'date',
                'before_or_equal:today'
            ],
            'started_reading_date' => 'nullable|date_format:Y-m-d',
            'finished_reading_date' => [
                'nullable',
                'date_format:Y-m-d',
                'after_or_equal:started_reading_date'
            ]
        ];

        if ($this->getMethod() == 'POST') {
            $rules['manga_id'][] = 'unique:user_manga,manga_id,NULL,id,user_id,' . auth()->user()->id;
        } elseif ($this->getMethod() == 'PUT') {
            $rules['manga_id'][] = Rule::unique('user_manga', 'manga_id')->where(function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->ignore($this->route('user_manga')->id);
        }

        return $rules;
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'status_id.required' => 'The status field is required.',
            'status_id.integer' => 'The status field must be an integer.',
            'status_id.exists' => 'The selected status is invalid.',
            'manga_id.required' => 'The manga field is required.',
            'manga_id.integer' => 'The manga field must be an integer.',
            'manga_id.exists' => 'The selected manga is invalid.',
            'manga_id.unique' => 'You already have this manga in your list.',
            'rating.integer' => 'The rating field must be an integer.',
            'rating.between' => 'The rating field must be between :min and :max.',
            'rating.regex' => 'The rating field must be in increments of 0.5.',
            'date_rated.date' => 'The date rated field must be a valid date.',
            'date_rated.before_or_equal' => 'The date rated field cannot be a future date.',
        ];
    }
}

