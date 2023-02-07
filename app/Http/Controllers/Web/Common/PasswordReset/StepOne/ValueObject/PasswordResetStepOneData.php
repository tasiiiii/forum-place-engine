<?php

namespace App\Http\Controllers\Web\Common\PasswordReset\StepOne\ValueObject;

use App\ForumPlaceEngine\User\Contract\PasswordResetStepOneDataInterface;

class PasswordResetStepOneData implements PasswordResetStepOneDataInterface
{
    public function __construct(
        private readonly string $email
    )
    {}

    public function getEmail(): string
    {
        return $this->email;
    }
}
