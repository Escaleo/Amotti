<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name'    => 'required|string|max:255',
            'code'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'message' => 'required|string|max:1000',
        ];
    }
    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required'  => 'El nombre es obligatorio.',
            'code.required'  => 'El código es obligatorio.',
            'phone.required' => 'El teléfono es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email'    => 'El correo electrónico debe ser una dirección válida.',
        ];

    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name'    => 'nombre',
            'code'    => 'código',
            'phone'   => 'teléfono',
            'email'   => 'correo electrónico',
            'website' => 'sitio web',
            'message' => 'mensaje',
        ];
    }
}
