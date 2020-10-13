<?php

namespace App\Http\Requests\News;

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
         $rules = [
            'title' =>'required|unique:posts,title,'.$this->id,
            'ncategory_id' =>'required'
        ];
        return $rules;
    }
}
