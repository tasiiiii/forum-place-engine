<?php

namespace App\Repository;

use App\ForumPlaceEngine\ForumTopic\Enum\ForumTopicStatusEnum;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Models\ForumCategory;
use App\Models\ForumTopic;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ForumTopicRepository implements ForumTopicRepositoryInterface
{
    public function getWithPagination(int $size): LengthAwarePaginator
    {
        return ForumTopic::query()
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
}
