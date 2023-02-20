<?php

namespace App\ForumPlaceEngine\User\Contract;

interface PasswordStrengthCheckerDataInterface
{
    public function getPassword(): string;

    /**
     * @return string[]
     */
    public function getUserData(): array;
}
