<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'fiscal_code' => 'required|string|min:10|max:20',
            'salary' => 'required|numeric',
        ];
    }
    public function messages() {

        return [
            'firstname.min' => "Il nome non puo' essere minore di 3 caratteri"
        ];
    }
}
