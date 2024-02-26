<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        // return ['required', 'string', Password::default(), 'confirmed'];
        return [
            'required',
            'string',
            'confirmed',
            'min:6',
            'max:8',
            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[._\-$\/])[A-Za-z\d._\-$\/]{6,8}$/'
        ];
    }
}
