<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name'=>'required',
            'username'=>'required|alpha_num|unique:users,username',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|regex:/(01)[0-9]{9}/',
            'password'=>'required|min:8',
            'cpassword'=>'required|same:password',
            'address'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'username.required' => 'Username is required!',
            'username.alpha_num' => 'Invalid Username!',
            'username.unique' => 'Username not available!',
            'email.required' => 'Email is required!',
            'email.email' => 'Email is not valid!',
            'email.unique' => 'This email is already registered!',
            'phone.required' => 'Phone Number is required!',
            'phone.regex' => 'Phone Number is not valid!',
            'password.required' => 'Password is required!',
            'password.min' => 'Password length is minimun 8!',
            'cpassword.same' => 'Passwords do not match!',
            'cpassword.required' => 'Confirm Password is required!',
            'address.required' => 'You must enter address!'
        ];
    }
}
