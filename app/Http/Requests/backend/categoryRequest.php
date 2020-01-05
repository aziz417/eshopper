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
        if ($this->method() == 'POST'){
            return [
                'name' => 'required|unique:categories',
                'slug' => 'unique:categories',
            ];
        }elseif ($this->method() == 'PUT' or $this->method() == 'PATCH'){
            return [
                'name' => 'required|unique:categories,name,'. $this->category->id,
                'slug' => 'unique:categories,slug,'. $this->category->id,
            ];
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required',
            'name.min' => 'The name must be at least 3 characters.',
        ];
    }
}
