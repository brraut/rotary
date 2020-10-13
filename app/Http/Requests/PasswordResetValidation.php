<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordResetValidation extends FormRequest
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
        $this->customValidation();
        
        return [
            'old_password' => 'required|match_password',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

     public function customValidation()
    {
          Validator::extend('match_password',function ($attribute, $value, $parameters, $validator){
//
            $old = request()->get('old_password');
            if(Hash::check($old, auth()->user()->password))
                return true;

            return false;
        });
    }


    public function messages()
    {
            return [
                'old_password.match_password' => 'The password you provided doesn\'t match your current password.'
            ];
    } 
}
