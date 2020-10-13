<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class UploadExcelValidation extends FormRequest
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
            'input_file'=> 'required|mimes:xls,xlsx',
        ];
    }


    public function messages()
    {
            return [
                'input_file.required'=>'Please Upload A File Before Submitting',
                'input_file.mimes'=>'Are You Sure You Provided An Excel File?',
            ];
    } 
}
