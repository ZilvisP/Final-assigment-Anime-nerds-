<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'category' => 'required|in:anime,manga',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The status name is required.',
            'category.required' => 'The category is required.',
            'category.in' => 'The category must be either anime or manga.',
        ];
    }
}
