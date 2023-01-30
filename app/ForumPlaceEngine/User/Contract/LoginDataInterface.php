<?php

namespace App\ForumPlaceEngine\User\Contract;

interface LoginDataInterface
{
    public function getEmail(): string;
    public function getPassword(): string;
}
