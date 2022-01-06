<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
        if ($this->id) {
            return [
                "name"                      => "required",
                'email'                     => 'email|required|unique:users,email,' . $this->id, // unique se envia parametros con dos puntos, se envia la tabla, el campo y el id
            ];
        }
        return [
                "name"                      => "required",
                'email'                     => 'email|required|unique:users,email,' . $this->id, // unique se envia parametros con dos puntos, se envia la tabla, el campo y el id
                "password"                  => "required|confirmed",
                "password_confirmation"     => "required"
            ];
    }

    public function attributes()
    {
        return [
            "name" => "Name",
            "email" => "Email",
            "password"              => "Password",
            "password_confirmation" => "Confirm Password"
        ];
    }
}
