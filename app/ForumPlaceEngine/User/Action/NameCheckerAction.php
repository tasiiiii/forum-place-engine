<?php

namespace App\ForumPlaceEngine\User\Action;

use App\ForumPlaceEngine\User\Contract\NameDataInterface;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;

class NameCheckerAction
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    )
    {}

    public function exist(NameDataInterface $data): bool
    {
        $user = $this->userRepository->getByName($data->getName());
        return !is_null($user);
    }
}
