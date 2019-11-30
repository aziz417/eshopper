<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class categoryRequest extends FormRequest
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
            'name' => 'bail|unique:categories|required|min:3|max:50',
            'description' => 'bail|required|min:5|max:500',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'The name field is required',
            'name.min' => 'The name must be at least 3 characters.',
        ];
    }

}
