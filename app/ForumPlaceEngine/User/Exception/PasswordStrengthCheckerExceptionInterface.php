<?php

namespace App\ForumPlaceEngine\User\Exception;

use Throwable;

interface PasswordStrengthCheckerExceptionInterface extends Throwable
{
    /**
     * @return string[]
     */
    public function getErrors(): array;
    public function isValid(): bool;
}
