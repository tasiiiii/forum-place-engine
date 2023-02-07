<?php

namespace App\ForumPlaceEngine\User\Contract;

interface PasswordResetStepOneDataInterface
{
    public function getEmail(): string;
}
