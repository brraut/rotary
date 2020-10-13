<?php

namespace App\Http\Requests\Interact;

use Illuminate\Foundation\Http\FormRequest;

class EditFormValidation extends FormRequest
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
           'title'=> 'required|unique:interacts,title,'.$this->id,
           'facebook_url' => 'required',
           'website_url' => 'required',
           'description'=> 'required',
        ];
    }
}