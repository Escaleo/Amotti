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
            'nombre'     => 'required|string|max:255',
            'telefono'   => 'required|string|max:50',
            'email'      => 'required|email|max:255',
            'web'        => 'nullable|string|max:255',
            'mensaje'    => 'nullable|string|max:2000',
            'privacidad' => 'accepted',
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
            'nombre.required'   => 'El nombre es obligatorio.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'email.required'    => 'El correo electrónico es obligatorio.',
            'email.email'       => 'El correo electrónico debe ser una dirección válida.',
            'privacidad.accepted' => 'Debes aceptar la política de privacidad.',
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
            'nombre'   => 'nombre',
            'telefono' => 'teléfono',
            'email'    => 'correo electrónico',
            'web'      => 'sitio web',
            'mensaje'  => 'mensaje',
            'privacidad' => 'política de privacidad',
        ];
    }
}
