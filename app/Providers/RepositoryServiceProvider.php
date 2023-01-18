<?php

namespace App\Providers;

use App\ForumPlaceEngine\ForumSection\Repository\ForumSectionRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Repository\ForumSectionRepository;
use App\Repository\ForumTopicRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ForumSectionRepositoryInterface::class, ForumSectionRepository::class);
        $this->app->bind(ForumTopicRepositoryInterface::class, ForumTopicRepository::class);
    }

    public function boot(): void
    {}
}
