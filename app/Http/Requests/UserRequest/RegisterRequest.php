<?php

namespace App\Http\Requests\UserRequest;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' =>'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'confirmPassword' => 'required|min:5|same:password'
        ];
    }

    public function  messages()  {
        return [
            'name.required' => 'Please enter your name!',
            'email.required' => 'Please enter your email!',
            'password.required' => 'Please enter your password.',
            'confirmPassword.required' => 'Please enter confirmPassword'
        ];
    }
}
