<?php

namespace App\ForumPlaceEngine\User\Action;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\User\Contract\LoginDataInterface;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAction
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    )
    {}

    /**
     * @throws ApplicationException
     */
    public function run(LoginDataInterface $data): void
    {
        $user = $this->userRepository->getByEmail($data->getEmail());
        if (is_null($user)) {
            throw new ApplicationException('Неверный логин или пароль');
        }

        if (!Hash::check($data->getPassword(), $user->password)) {
            throw new ApplicationException('Неверный логин или пароль');
        }

        Auth::login($user);
    }
}
