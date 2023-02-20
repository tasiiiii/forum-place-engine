<?php

namespace App\Infrastructure\PasswordStrengthChecker\Exception;

use App\ForumPlaceEngine\User\Exception\PasswordStrengthCheckerExceptionInterface;
use Exception;

class PasswordStrengthCheckerException extends Exception implements PasswordStrengthCheckerExceptionInterface
{
    public function __construct(
        private readonly array $errors,
        private readonly bool  $valid
    )
    {
        parent::__construct();
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function isValid(): bool
    {
        return $this->valid;
    }
}
