<?php

namespace App\Http\Controllers\Ajax\Common\Registration\PasswordStrengthChecker\ValueObject;

use App\ForumPlaceEngine\User\Contract\PasswordStrengthCheckerDataInterface;

class PasswordStrengthCheckerData implements PasswordStrengthCheckerDataInterface
{
    public function __construct(
        private readonly string $password,
        private readonly array  $userData
    )
    {}

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUserData(): array
    {
        return $this->userData;
    }
}
