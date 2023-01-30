<?php

namespace App\ForumPlaceEngine\User\Action;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\User\Contract\RegistrationDataInterface;
use App\ForumPlaceEngine\User\Enum\UserStatusEnum;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationAction
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    )
    {}

    /**
     * @throws ApplicationException
     */
    public function run(RegistrationDataInterface $data): void
    {
        $user = $this->userRepository->getByName($data->getName());
        if (!is_null($user)) {
            throw new ApplicationException('Пользователь с данным никнеймом уже существует');
        }

        $user = $this->userRepository->getByEmail($data->getEmail());
        if (!is_null($user)) {
            throw new ApplicationException('Пользователь с данной почтой уже существует');
        }

        $user                   = new User();
        $user->name             = $data->getName();
        $user->avatar           = '/upload/user/avatar/default.png';
        $user->background_image = '/upload/user/background/default.png';
        $user->email            = $data->getEmail();
        $user->password         = Hash::make($data->getPassword());
        $user->status           = UserStatusEnum::Active->value;

        $user->save();
    }
}
