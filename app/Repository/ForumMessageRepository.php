<?php

namespace App\Repository;

use App\ForumPlaceEngine\ForumMessage\Repository\ForumMessageRepositoryInterface;
use App\Models\ForumCategory;
use App\Models\ForumMessage;
use App\Models\ForumTopic;

class ForumMessageRepository implements ForumMessageRepositoryInterface
{
    public function countMessagesInForumCategory(ForumCategory $forumCategory): int
    {
        return ForumMessage::query()
            ->join('forum_topics', 'forum_messages.forum_topic_id', '=', 'forum_topics.id')
            ->join('forum_categories', 'forum_topics.forum_category_id', '=', 'forum_categories.id')
            ->where('forum_categories.id', '=', $forumCategory->id)
            ->count('forum_messages.id');
    }

    public function getLastMessageInTopic(ForumTopic $forumTopic): ?ForumMessage
    {
        return ForumMessage::query()
            ->where('forum_topic_id', '=', $forumTopic->id)
            ->orderByDesc('created_at')
            ->first();
    }
}
