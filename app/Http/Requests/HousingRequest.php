<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HousingRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'address' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'image' => ['image','max:2000', 'mimes:png,jpg'],
            'category_id' => ['required'],
        ];
    }

    // protected function prepareForValidation()
    // {
    //    $this->merge([
    //         'category_id' => $this->input('category')
    //     ]);

    //     // dd($t);
    // }
}
