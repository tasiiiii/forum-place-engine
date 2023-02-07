<?php

namespace App\Repository;

use App\ForumPlaceEngine\User\Repository\UserPasswordResetRepositoryInterface;
use App\Models\UserPasswordReset;

class UserPasswordResetRepository implements UserPasswordResetRepositoryInterface
{
    public function getByHash(string $hash): ?UserPasswordReset
    {
        return UserPasswordReset::query()
            ->where('hash', '=', $hash)
            ->first();
    }
}
