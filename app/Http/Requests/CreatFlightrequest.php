<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreatFlightrequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
         'name' => 'required|string|max:255'
        ];

    }

    public function messages()
    {
        return [
            'name.required' => ' 1حقل الاسم مطلوب',
            'name.string' => 'يجب أن يكون حقل الاسم نصًا',
            'name.max' => 'لا يمكن أن يتجاوز طول حقل الاسم 255 حرف',
        ];
    }
}
