<?php

namespace App\Providers;

use App\ForumPlaceEngine\ForumCategory\ForumCategoryRepositoryInterface;
use App\ForumPlaceEngine\ForumMessage\Repository\ForumMessageRepositoryInterface;
use App\ForumPlaceEngine\ForumSection\Repository\ForumSectionRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicReactionRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;
use App\ForumPlaceEngine\User\Repository\UserPasswordResetRepositoryInterface;
use App\Repository\ForumCategoryRepository;
use App\Repository\ForumMessageRepository;
use App\Repository\ForumSectionRepository;
use App\Repository\ForumTopicReactionRepository;
use App\Repository\ForumTopicRepository;
use App\Repository\UserRepository;
use App\Repository\UserPasswordResetRepository;
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
        $this->app->bind(ForumTopicReactionRepositoryInterface::class, ForumTopicReactionRepository::class);
        $this->app->bind(UserPasswordResetRepositoryInterface::class, UserPasswordResetRepository::class);
    }

    public function boot(): void
    {}
}
