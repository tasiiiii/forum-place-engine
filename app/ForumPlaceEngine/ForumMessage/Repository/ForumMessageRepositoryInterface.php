<?php

namespace App\ForumPlaceEngine\ForumMessage\Repository;

use App\Models\ForumCategory;
use App\Models\ForumMessage;
use App\Models\ForumTopic;

interface ForumMessageRepositoryInterface
{
    public function countMessagesInForumCategory(ForumCategory $forumCategory): int;
    public function getLastMessageInTopic(ForumTopic $forumTopic): ?ForumMessage;
}
