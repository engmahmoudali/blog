<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|unique:posts,title,'.$this->id.',id|alpha:ascii',
            // 'slug' => 'nullable|unique:posts,slug,'.$this->id.',id',
            'content' => 'nullable|min:20',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,webp',
        ];
    }
}
