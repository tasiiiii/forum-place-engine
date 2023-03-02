<?php

namespace App\Policies;

use App\ForumPlaceEngine\ForumTopic\Enum\ForumTopicStatusEnum;
use App\Models\ForumTopic;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForumTopicPolicy
{
    use HandlesAuthorization;

    public function show(User $user, ForumTopic $forumTopic): bool
    {
        if (in_array($forumTopic->status, ForumTopicStatusEnum::getStatusesOnlyForCreator())) {
            return $forumTopic->creator_id === $user->id;
        }

        if ($forumTopic->status === ForumTopicStatusEnum::Private->value) {
            return $forumTopic->creator_id === $user->id;
        }

        if ($forumTopic->status === ForumTopicStatusEnum::Banned->value) {
            return false;
        }

        return true;
    }
}
