<?php

namespace App\ForumPlaceEngine\User\Action;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\User\Contract\PasswordResetStepOneDataInterface;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;
use App\Mail\PasswordResetMail;
use App\Models\UserPasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordResetStepOneAction
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    )
    {}

    /**
     * @throws ApplicationException
     */
    public function run(PasswordResetStepOneDataInterface $data): void
    {
        $user = $this->userRepository->getByEmail($data->getEmail());
        if (is_null($user)) {
            throw new ApplicationException('Пользователь не найден');
        }

        $userResetPassword          = new UserPasswordReset();
        $userResetPassword->user_id = $user->id;
        $userResetPassword->hash    = Str::random();

        Mail::to($user)->send(new PasswordResetMail($userResetPassword->hash));

        $userResetPassword->save();
    }
}
