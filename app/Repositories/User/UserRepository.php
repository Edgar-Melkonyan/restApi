<?php

namespace App\Repositories\User;

use App\Models\User;

interface UserRepository
{
    public function login(User $user): array ;
    public function logout(User $user): void ;
}