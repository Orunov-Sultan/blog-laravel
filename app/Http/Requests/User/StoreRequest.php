<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле обязательно для заполнения.',
            'name.string' => 'Это поле должно соответствовать строковому типу.',
            'email.required' => 'Это поле обязательно для заполнения.',
            'email.string' => 'Это поле должно соответствовать строковому типу.',
            'email.email' => 'Это поле должно соответствовать формату example@some.dom.',
            'email.unique' => 'Пользователь с таким email уже существует.',
            'password.required' => 'Это поле обязательно для заполнения.',
            'role.required' => 'Это поле обязательно для заполнения.',
            'role.integer' => 'Это поле должно соответствовать числовому типу.',
        ];
    }
}
