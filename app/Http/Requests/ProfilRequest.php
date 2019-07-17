<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'birth' => 'required|before: -17 years',
            'no_ktp' => 'required',
            'address' => 'required',
            'cv' => 'image|mimes:jpeg,png,jpg,gif|max:4096',

        ];
    }
    public function message(){
        return [ 'cv' => 'format file not supported',
         ];

    }
}
