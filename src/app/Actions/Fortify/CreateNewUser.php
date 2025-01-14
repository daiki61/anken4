<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
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
            'user_id' => 'required',
            'username' => 'required|string|max:255',
            'email' => 
                'required|
                string|
                email|
                max:255|
                unique:users,email',
                //Rule::unique('users', 'email'),
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'user_id' => Str::uuid(),
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        
    }
}
