<?php

namespace App\Providers;

use App\ForumPlaceEngine\User\Service\PasswordStrengthCheckerServiceInterface;
use App\Infrastructure\PasswordStrengthChecker\PasswordStrengthCheckerService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(PasswordStrengthCheckerServiceInterface::class, PasswordStrengthCheckerService::class);
    }

    public function boot(): void
    {}
}
