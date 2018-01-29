<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Post extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

                    'firstname' => 'required|max:255',
                    'lastname' => 'required|max:255',
                    'password' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'sex' => 'required',
                    'phon_numb' => 'required'


        ];
    }
}
