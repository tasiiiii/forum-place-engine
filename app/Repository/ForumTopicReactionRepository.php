<?php

namespace App\Repository;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicReactionRepositoryInterface;
use App\Models\ForumTopic;
use App\Models\ForumTopicReaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ForumTopicReactionRepository implements ForumTopicReactionRepositoryInterface
{
    public function getByForumTopicAndUser(ForumTopic $forumTopic, User $user): ?ForumTopicReaction
    {
        return ForumTopicReaction::query()
            ->where('forum_topic_id', '=', $forumTopic->id)
            ->where('user_id', '=', $user->id)
            ->first();
    }

    public function getByForumTopic(ForumTopic $forumTopic): Collection
    {
        return ForumTopicReaction::query()
            ->where('forum_topic_id', '=', $forumTopic->id)
            ->get();
    }
}
