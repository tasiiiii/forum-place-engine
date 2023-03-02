<?php

namespace App\Providers;

use App\Models\ForumTopic;
use App\Policies\ForumTopicPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * @var array<class-string, class-string>
     */
    protected $policies = [
        ForumTopic::class => ForumTopicPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
