<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreatContry extends FormRequest
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
         'name' => 'required|string|max:255',
         'address' => 'required|string|max:255'
        ];

    }
    public function messages()

    {
        return [
            'name.required' =>'حقل الاسم مطلوب',
            'name.string' =>'يجب ان يكون الحقل نصا ',
            'name.max' =>'النص لا يتجاوز 255 حرف',
            'address.required' =>'حقل العنوان مطلوب',


        ];
    }
}
