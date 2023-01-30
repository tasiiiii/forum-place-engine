<?php

namespace App\Repository;

use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getByName(string $name): ?User
    {
        return User::query()
            ->where('name', '=', $name)
            ->first();
    }

    public function getByEmail(string $email): ?User
    {
        return User::query()
            ->where('email', '=', $email)
            ->first();
    }
}
