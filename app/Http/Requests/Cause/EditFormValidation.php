<?php

namespace App\Http\Requests\Cause;

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
           'title'=> 'required|unique:causes,title,'.$this->id,
           'subtitle'=>'required',
           'description'=> 'required',
        ];
    }
}
