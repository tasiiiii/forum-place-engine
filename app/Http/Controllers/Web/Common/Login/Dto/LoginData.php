<?php

namespace App\Http\Controllers\Web\Common\Login\Dto;

use App\ForumPlaceEngine\User\Contract\LoginDataInterface;

class LoginData implements LoginDataInterface
{
    private string $email;
    private string $password;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
