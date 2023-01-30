<?php

namespace App\Http\Controllers\Web\Common\Registration\Dto;

use App\ForumPlaceEngine\User\Contract\RegistrationDataInterface;

class RegistrationData implements RegistrationDataInterface
{
    private string $name     = '';
    private string $email    = '';
    private string $password = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

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
