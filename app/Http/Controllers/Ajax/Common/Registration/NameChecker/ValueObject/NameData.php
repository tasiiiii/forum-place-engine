<?php

namespace App\Http\Controllers\Ajax\Common\Registration\NameChecker\ValueObject;

use App\ForumPlaceEngine\User\Contract\NameDataInterface;

class NameData implements NameDataInterface
{
    public function __construct(
        private readonly string $name
    )
    {}

    public function getName(): string
    {
        return $this->name;
    }
}
