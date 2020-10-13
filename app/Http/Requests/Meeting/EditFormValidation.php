<?php

namespace App\Http\Requests\Meeting;

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
            'name'=> 'required',
            'language'=> 'required',
           'weekly_meeting'=> 'required',
           'meeting_notice'=> 'required',
           'attendent'=> 'required',
           'venue'=> 'required',
           'google_map'=> 'required',
           'description'=> 'required',
        ];
    }
}
