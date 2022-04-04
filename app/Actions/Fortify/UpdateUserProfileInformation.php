<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],

            'phone_number' => ['required', 'string', 'max:255'],

            'address' => ['required', 'string', 'max:255'],

            'contact_person' => ['required', 'string', 'max:255'],

            'contact_phone' => ['required', 'string', 'max:255'],

            'contact_email' => ['required', 'email', 'max:255'],

            'cert' => ['required', 'string', 'max:255'],
            'manpower' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'phone_number' => $input['phone_number'],
                'address' => $input['address'],
                'CAC' => $input['CAC'],
                'contact_person' => $input['contact_person'],
                'contact_phone' => $input['contact_phone'],
                'contact_email' => $input['contact_email'],
                'cert' => $input['cert'],
                'manpower' => $input['manpower'],
                'email' => $input['email'],

            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
