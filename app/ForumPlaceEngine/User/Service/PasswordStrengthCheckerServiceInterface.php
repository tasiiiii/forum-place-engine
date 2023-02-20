<?php

namespace App\ForumPlaceEngine\User\Service;

use App\ForumPlaceEngine\User\Contract\PasswordStrengthCheckerDataInterface;
use App\ForumPlaceEngine\User\Exception\PasswordStrengthCheckerExceptionInterface;

interface PasswordStrengthCheckerServiceInterface
{
    /**
     * @throws PasswordStrengthCheckerExceptionInterface
     */
    public function check(PasswordStrengthCheckerDataInterface $data): void;
}
