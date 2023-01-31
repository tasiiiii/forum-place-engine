<?php

namespace App\ForumPlaceEngine\ForumTopic\Repository;

use App\Models\ForumTopic;
use Illuminate\Database\Eloquent\Collection;

interface ForumTopicReactionRepositoryInterface
{
    public function getByForumTopic(ForumTopic $forumTopic): Collection;
}
