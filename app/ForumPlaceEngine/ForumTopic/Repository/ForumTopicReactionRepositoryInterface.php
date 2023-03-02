<?php

namespace App\ForumPlaceEngine\ForumTopic\Repository;

use App\Models\ForumTopic;
use App\Models\ForumTopicReaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface ForumTopicReactionRepositoryInterface
{
    public function getByForumTopicAndUser(ForumTopic $forumTopic, User $user): ?ForumTopicReaction;
    public function getByForumTopic(ForumTopic $forumTopic): Collection;
    public function countByForumTopic(ForumTopic $forumTopic): int;
}
