<?php

namespace App\Http\Requests\Link;

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
            'title' => 'required|unique:links,title,'.$this->id,
            'link' => 'required|unique:links,link,'.$this->id,
        ];
    }
}
