<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

$unique = IdGenerator::generate(['table' => 'users', 'field' => 'unique_id', 'length' => 10, 'prefix' => 'NEMSA-']);

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'unique_id' => $unique,
            'password' => Hash::make($input['password']),
        ]);
    }
}
