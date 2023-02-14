<?php

namespace App\Http\Controllers\Web\Common\PasswordReset\StepTwo\Dto;

use App\ForumPlaceEngine\User\Contract\PasswordResetStepTwoDataInterface;

class PasswordResetStepTwoData implements PasswordResetStepTwoDataInterface
{
    private string $hash;
    private string $password;

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
