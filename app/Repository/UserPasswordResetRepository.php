<?php

namespace App\Repository;

use App\ForumPlaceEngine\User\Repository\UserPasswordResetRepositoryInterface;
use App\Models\UserPasswordReset;
use DateTime;
use Illuminate\Database\Eloquent\Collection;

class UserPasswordResetRepository implements UserPasswordResetRepositoryInterface
{
    public function getLastByHash(string $hash): ?UserPasswordReset
    {
        return UserPasswordReset::query()
            ->where('hash', '=', $hash)
            ->orderByDesc('id')
            ->limit(1)
            ->first();
    }

    public function getToCreatedBeforeDate(DateTime $toCreatedAt): Collection
    {
        return UserPasswordReset::query()
            ->where('created_at', '<', $toCreatedAt)
            ->get();
    }
}
