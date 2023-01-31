<?php

namespace App\Repository;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicReactionRepositoryInterface;
use App\Models\ForumTopic;
use App\Models\ForumTopicReaction;
use Illuminate\Database\Eloquent\Collection;

class ForumTopicReactionRepository implements ForumTopicReactionRepositoryInterface
{
    public function getByForumTopic(ForumTopic $forumTopic): Collection
    {
        return ForumTopicReaction::query()
            ->where('forum_topic_id', '=', $forumTopic->id)
            ->get();
    }
}
