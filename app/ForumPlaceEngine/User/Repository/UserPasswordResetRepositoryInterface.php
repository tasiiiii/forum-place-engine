<?php

namespace App\ForumPlaceEngine\User\Repository;

use App\Models\UserPasswordReset;
use DateTime;
use Illuminate\Database\Eloquent\Collection;

interface UserPasswordResetRepositoryInterface
{
    public function getLastByHash(string $hash): ?UserPasswordReset;
    public function getToCreatedBeforeDate(DateTime $toCreatedAt): Collection;
}
