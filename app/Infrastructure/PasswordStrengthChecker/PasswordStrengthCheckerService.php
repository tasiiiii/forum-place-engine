<?php

namespace App\Infrastructure\PasswordStrengthChecker;

use App\ForumPlaceEngine\User\Contract\PasswordStrengthCheckerDataInterface;
use App\ForumPlaceEngine\User\Exception\PasswordStrengthCheckerExceptionInterface;
use App\ForumPlaceEngine\User\Service\PasswordStrengthCheckerServiceInterface;
use App\Infrastructure\PasswordStrengthChecker\Exception\PasswordStrengthCheckerException;
use Tasiiiii\FoxSecurity\PasswordChecker;
use Tasiiiii\FoxSecurity\Rule\LengthRule;
use Tasiiiii\FoxSecurity\Rule\RuleCollection;
use Tasiiiii\FoxSecurity\Rule\SameWithOtherRule;
use Tasiiiii\FoxSecurity\Rule\SpecialCharacterRule;

class PasswordStrengthCheckerService implements PasswordStrengthCheckerServiceInterface
{
    public function __construct(
        private readonly PasswordChecker $passwordChecker
    )
    {}

    /**
     * @throws PasswordStrengthCheckerExceptionInterface
     */
    public function check(PasswordStrengthCheckerDataInterface $data): void
    {
        $result = $this->passwordChecker->process(
            $data->getPassword(),
            (new RuleCollection())
                ->addRule(new LengthRule())
                ->addRule(new SpecialCharacterRule())
                ->addRule(new SameWithOtherRule($data->getUserData()))
        );

        if (!empty($result->getErrors()) || !$result->isValid()) {
            throw new PasswordStrengthCheckerException($result->getErrors(), $result->isValid());
        }
    }
}
