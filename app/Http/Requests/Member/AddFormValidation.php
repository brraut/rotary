<?php

namespace App\Http\Requests\Member;

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
            'name' => 'required|unique:members,name',
            'member_id' => 'required|unique:members,member_id',
            'position' => 'required',
            'address' => 'required',
            'position' => 'required',
            'mtype_id' => 'required'
        ];
    }
}
