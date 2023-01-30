<?php

namespace App\ForumPlaceEngine\User\Repository;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getByName(string $name): ?User;
    public function getByEmail(string $email): ?User;
}
