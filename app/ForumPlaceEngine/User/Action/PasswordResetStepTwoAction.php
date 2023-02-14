<?php

namespace App\ForumPlaceEngine\User\Action;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\User\Contract\PasswordResetStepTwoDataInterface;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;
use App\ForumPlaceEngine\User\Repository\UserPasswordResetRepositoryInterface;
use DateInterval;
use DateTime;
use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;

class PasswordResetStepTwoAction
{
    private int $emailResetPasswordMinutesLifetime;

    public function __construct(
        private readonly UserRepositoryInterface              $userRepository,
        private readonly UserPasswordResetRepositoryInterface $userResetPasswordRepository
    )
    {
        $this->emailResetPasswordMinutesLifetime = (int) Config::get('app.email_reset_password_minutes_lifetime');
    }

    /**
     * @throws ApplicationException
     * @throws Exception
     */
    public function run(PasswordResetStepTwoDataInterface $data): void
    {
        $userResetPassword = $this->userResetPasswordRepository->getLastByHash($data->getHash());

        if (!isset($userResetPassword)) {
            throw new ApplicationException('Неверные данные, попробуйте еще раз');
        }

        try {
            $expiredTime  = (new DateTime())->add(
                new DateInterval(sprintf('P%dM', $this->emailResetPasswordMinutesLifetime))
            );
            $dateInterval = $userResetPassword->created_at->diff($expiredTime);
            if ($dateInterval->m > $this->emailResetPasswordMinutesLifetime) {
                throw new ApplicationException('Код восстановления устарел');
            }

            $user = $this->userRepository->getById($userResetPassword->user_id);
            if (is_null($user)) {
                throw new ApplicationException('Пользователь не найден');
            }

            $user->password = Hash::make($data->getPassword());
            $user->save();
        } finally {
            $userResetPassword->delete();
        }
    }
}
