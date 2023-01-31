<?php

namespace App\Repository;

use App\ForumPlaceEngine\ForumTopic\Enum\ForumTopicStatusEnum;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Models\ForumCategory;
use App\Models\ForumTopic;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ForumTopicRepository implements ForumTopicRepositoryInterface
{
    public function getWithPagination(ForumCategory $forumCategory, int $size): LengthAwarePaginator
    {
        return ForumTopic::query()
            ->where('forum_category_id', '=', $forumCategory->id)
            ->where('status', '=', ForumTopicStatusEnum::Published->value)
            ->orderBy('created_at', 'DESC')
            ->paginate($size);
    }

    public function getPinnedForForumCategory(string $forumCategoryAlias): Collection
    {
        return ForumTopic::query()
            ->where('status', '=', ForumTopicStatusEnum::Pinned->value)
            ->whereRelation('forumCategory', 'alias', '=', $forumCategoryAlias)
            ->get();
    }

    public function countTopicsInForumCategory(ForumCategory $forumCategory): int
    {
        return ForumTopic::query()
            ->whereIn('status', ForumTopicStatusEnum::getStatusesWithOpenVisibility())
            ->whereRelation('forumCategory', 'alias', '=', $forumCategory->alias)
            ->count();
    }

    public function getLastByForumCategory(ForumCategory $forumCategory, int $size): Collection
    {
        return ForumTopic::query()
            ->where('forum_category_id', '=', $forumCategory->id)
            ->orderBy('created_at', 'DESC')
            ->limit($size)
            ->get();
    }

    public function countMessagesInTopic(ForumTopic $forumTopic): int
    {
        return ForumTopic::query()
            ->where('forum_topics.id', '=', $forumTopic->id)
            ->join('forum_messages', 'forum_topics.id', '=', 'forum_messages.forum_topic_id')
            ->count();
    }

    public function countTopicsForCreator(User $user): int
    {
        return ForumTopic::query()
            ->where('creator_id', '=', $user->id)
            ->count();
    }
}
