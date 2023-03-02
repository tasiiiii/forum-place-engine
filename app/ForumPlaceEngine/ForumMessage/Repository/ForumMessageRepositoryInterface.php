<?php

namespace App\ForumPlaceEngine\ForumMessage\Repository;

use App\Models\ForumCategory;
use App\Models\ForumMessage;
use App\Models\ForumTopic;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ForumMessageRepositoryInterface
{
    public function countMessagesInForumCategory(ForumCategory $forumCategory): int;
    public function getLastMessageInTopic(ForumTopic $forumTopic): ?ForumMessage;
    public function getWithPagination(ForumTopic $forumTopic, int $length = 10): LengthAwarePaginator;
}
