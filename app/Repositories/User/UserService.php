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
     * Register user.
     *
     * @param array $input
     * @return array
     */
    public function register(array $input): array
    {
        $data = [
            'password' => bcrypt($input['password']),
            'name'     => $input['name'],
            'email'     => $input['email']
        ];
        $user = User::create($data);
        return ["token" => $user->createToken('MyApp')->accessToken, "name" => $user->name];
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