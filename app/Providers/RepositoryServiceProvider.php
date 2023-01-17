<?php

namespace App\Providers;

use App\ForumPlaceEngine\ForumSection\Repository\ForumSectionRepositoryInterface;
use App\Repository\ForumSectionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ForumSectionRepositoryInterface::class, ForumSectionRepository::class);
    }

    public function boot(): void
    {}
}
