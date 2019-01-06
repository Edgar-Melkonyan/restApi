<?php

namespace App\Repositories\User;

use App\Models\User;

class UserService implements UserRepository
{

    /**
     * Login user.
     *
     * @param User $user
     * @return array
     */
    public function login(User $user): array
    {
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        return $success;
    }

    /**
     * Logout user.
     *
     * @param User $user
     * @return void
     */
    public function logout(User $user): void
    {
        $user->token()->revoke();
    }
}