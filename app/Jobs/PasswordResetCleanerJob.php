<?php

namespace App\Jobs;

use App\ForumPlaceEngine\User\Repository\UserPasswordResetRepositoryInterface;
use App\Models\UserPasswordReset;
use DateInterval;
use DateTime;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;

class PasswordResetCleanerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private int $emailResetPasswordMinutesLifetime;

    public function __construct()
    {
        $this->emailResetPasswordMinutesLifetime = (int) Config::get('app.email_reset_password_minutes_lifetime');
    }

    /**
     * @throws Exception
     */
    public function handle(UserPasswordResetRepositoryInterface $userPasswordResetRepository): void
    {
        $before = (new DateTime())->sub(
            new DateInterval(
                sprintf('PT%dM', $this->emailResetPasswordMinutesLifetime)
            )
        );

        /** @var UserPasswordReset[] $userPasswordResets */
        $userPasswordResets = $userPasswordResetRepository->getToCreatedBeforeDate($before);

        foreach ($userPasswordResets as $userPasswordReset) {
            $userPasswordReset->delete();
        }
    }
}
