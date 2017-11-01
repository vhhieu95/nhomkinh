<?php

namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
            'title' => 'required|max:100|uniques:title',
            'description' => 'required|max:5000',
            'content' => 'required|max:2000',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ];
    }
}
