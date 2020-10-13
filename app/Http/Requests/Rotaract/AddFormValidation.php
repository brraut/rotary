<?php

namespace App\Http\Requests\Rotaract;

use Illuminate\Foundation\Http\FormRequest;

class AddFormValidation extends FormRequest
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
           'title'=> 'required|unique:rotaracts,title',
           'facebook_url' => 'required',
           'website_url' => 'required',
           'description'=> 'required',
        ];
    }
}
