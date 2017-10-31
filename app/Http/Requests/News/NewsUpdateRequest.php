<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required|max:1000',
            'content' => 'required|max:2000',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ];
    }
}
