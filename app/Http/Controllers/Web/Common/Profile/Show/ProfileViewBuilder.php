<?php

namespace App\Http\Controllers\Web\Common\Profile\Show;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\Web\Common\Profile\Show\Dto\ProfileViewData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileViewBuilder
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository
    )
    {}

    public function build(): ProfileViewData
    {
        /** @var User $user */
        $user = Auth::user();

        return (new ProfileViewData())
            ->setName($user->name)
            ->setAvatar($user->avatar)
            ->setBackground($user->background_image)
            ->setTopicsCounter($this->forumTopicRepository->countTopicsForCreator($user))
            ->setFriendsCounter(0)
            ->setVisitsCounter(0)
            ->setBiography($user->biography ?? 'Стараюсь оставаться анонимным');
    }
}
