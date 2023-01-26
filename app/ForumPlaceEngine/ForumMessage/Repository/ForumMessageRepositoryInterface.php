<?php

namespace App\ForumPlaceEngine\ForumMessage\Repository;

use App\Models\ForumCategory;

interface ForumMessageRepositoryInterface
{
    public function countMessagesInForumCategory(ForumCategory $forumCategory): int;
}
