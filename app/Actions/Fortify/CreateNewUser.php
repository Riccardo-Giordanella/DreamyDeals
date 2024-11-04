<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255', 'regex:/^(?=.*[a-zA-Z]).*$/', 'min:2'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ], [
            'name.required' => trans('ui.requiredName'),
            'name.string' => trans('ui.stringName'),
            'name.max' => trans('ui.stringMax'),
            'name.regex' => trans('ui.nameRegex'),
            'name.min' => trans('ui.nameMin'),
            'email.required' => trans('ui.requiredEmail'),
            'email.string' => trans('ui.stringEmail'),
            'email.email' => trans('ui.emailEmail'),
            'email.max' => trans('ui.emailMax'),
            'password.required' => trans('ui.requiredPassword'),
            'password.string' => trans('ui.stringPassword'),
            'password.min' => trans('ui.minPassword')
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
