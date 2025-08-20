<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        // Rule::unique('users')->ignore($this->route()->parameter('user'))
        return [
            'name' => ['required', 'string'],
            'age' => ['required', 'integer'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'role' => ['required', 'string'],
            'password' => ['required', 'confirmed', 'string'],
            'password_confirmation' => ['required', 'string'],
        ];
    }
}
