<?php

namespace App\ForumPlaceEngine\User\Contract;

interface RegistrationDataInterface extends NameDataInterface
{
    public function getEmail(): string;
    public function getPassword(): string;
}
