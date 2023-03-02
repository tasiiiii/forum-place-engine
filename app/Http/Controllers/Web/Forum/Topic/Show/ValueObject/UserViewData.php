<?php

namespace App\Http\Controllers\Web\Forum\Topic\Show\ValueObject;

class UserViewData
{
    public function __construct(
        private readonly string $name,
        private readonly string $avatar
    )
    {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getAvatar(): string
    {
        return $this->avatar;
    }
}
