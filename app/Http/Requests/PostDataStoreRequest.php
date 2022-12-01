<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostDataStoreRequest extends FormRequest
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
            'title' => 'required|string|max:10',
            'description' => 'required|max:50',
            'status' => 'required|string|max:50'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'description.required' => 'Description is required!',
            'status.required' => 'Status is required!'
        ];
    }
}
