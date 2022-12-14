<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */

    public function rules()
    {
        return [
            'title' => 'required|string|max:50',
            'description' => 'required|max:100',
            'status' => 'required|string|max:50',
            'category' => 'required',
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'description.required' => 'Description is required!',
            'status.required' => 'Status is required!',
            'title.max' => 'Title can not be longer than 50 characters!',
            'description.max' => 'Description can not be longer than 100 characters!',
            'status.max' => 'Status can not be longer than 50 characters!',
        ];
    }
}
