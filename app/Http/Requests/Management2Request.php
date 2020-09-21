<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Management2Request extends FormRequest
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
        if ($this->management) {
            return [
                'name' => 'required',
                'designation' => 'required',
                'editor1' => 'required'
            ];
        }
        return [
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
            'editor1' => 'required'
        ];
    }
}
