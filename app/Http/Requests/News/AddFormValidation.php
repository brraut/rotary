<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

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
        $rules = [
            'title' =>'required|unique:posts,title',
            'ncategory_id' =>'required'
        ];
        if(!request()->get('description') and !request()->has('file_upload')){
                $rules['description'] = 'required';
            }
        return $rules;
    }
}
