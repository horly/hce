<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactRequest extends FormRequest
{
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
            'name' => ['required', 'string', 'max:120'],
            'company' => ['nullable', 'string', 'max:160'],
            'email' => ['required', 'email:rfc', 'max:160'],
            'phone' => ['nullable', 'string', 'max:40'],
            'subject' => ['required', Rule::in([
                'Projet IT',
                'Services managés',
                'Sécurité',
                'Formation',
                'Partenariat',
                'Autre',
            ])],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
            'website' => ['nullable', 'string', 'max:0'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        if (app()->isLocale('en')) {
            return [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please enter your email address.',
                'email.email' => 'Please enter a valid email address.',
                'subject.required' => 'Please select an enquiry topic.',
                'subject.in' => 'The selected enquiry topic is invalid.',
                'message.required' => 'Please describe your enquiry.',
                'message.min' => 'Your message must contain at least 20 characters.',
            ];
        }

        return [
            'name.required' => 'Veuillez indiquer votre nom.',
            'email.required' => 'Veuillez indiquer votre adresse e-mail.',
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
            'subject.required' => 'Veuillez sélectionner l’objet de votre demande.',
            'subject.in' => 'L’objet sélectionné n’est pas valide.',
            'message.required' => 'Veuillez décrire votre demande.',
            'message.min' => 'Votre message doit contenir au moins 20 caractères.',
        ];
    }
}
