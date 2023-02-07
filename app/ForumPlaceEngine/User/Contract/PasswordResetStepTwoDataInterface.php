<?php

namespace App\ForumPlaceEngine\User\Contract;

interface PasswordResetStepTwoDataInterface
{
    public function getHash(): string;
    public function getPassword(): string;
}
