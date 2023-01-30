<?php

namespace App\Providers;

use App\ForumPlaceEngine\ForumCategory\ForumCategoryRepositoryInterface;
use App\ForumPlaceEngine\ForumMessage\Repository\ForumMessageRepositoryInterface;
use App\ForumPlaceEngine\ForumSection\Repository\ForumSectionRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;
use App\Repository\ForumCategoryRepository;
use App\Repository\ForumMessageRepository;
use App\Repository\ForumSectionRepository;
use App\Repository\ForumTopicRepository;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ForumSectionRepositoryInterface::class, ForumSectionRepository::class);
        $this->app->bind(ForumTopicRepositoryInterface::class, ForumTopicRepository::class);
        $this->app->bind(ForumMessageRepositoryInterface::class, ForumMessageRepository::class);
        $this->app->bind(ForumCategoryRepositoryInterface::class, ForumCategoryRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    public function boot(): void
    {}
}
