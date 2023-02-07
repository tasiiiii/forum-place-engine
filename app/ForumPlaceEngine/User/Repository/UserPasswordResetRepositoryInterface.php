<?php

namespace App\ForumPlaceEngine\User\Repository;

use App\Models\UserPasswordReset;

interface UserPasswordResetRepositoryInterface
{
    public function getLastByHash(string $hash): ?UserPasswordReset;
}
