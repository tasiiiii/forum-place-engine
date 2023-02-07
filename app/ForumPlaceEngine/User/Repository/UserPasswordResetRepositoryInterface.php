<?php

namespace App\ForumPlaceEngine\User\Repository;

use App\Models\UserPasswordReset;

interface UserPasswordResetRepositoryInterface
{
    public function getByHash(string $hash): ?UserPasswordReset;
}
