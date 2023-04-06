<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            "email" => "required|email",
            "password" => ["required" , function ($field, $value, $failed){
                if (strlen($value) < 2 )
                    $failed(__('validation.test.hello'));
            }],
            "select_number" => [ "array", "my_validator" ]
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'my_validator' => 'Each word in :attribute must begin with a capital letter'
    //     ];
    // }
}
