<?php

namespace App\ForumPlaceEngine\ForumTopic\Repository;

use App\Models\ForumCategory;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface ForumTopicRepositoryInterface
{
    public function getWithPagination(int $size): LengthAwarePaginator;
    public function getPinnedForForumCategory(string $forumCategoryAlias): Collection;
    public function countTopicsInForumCategory(ForumCategory $forumCategory): int;
    public function getLastByForumCategory(ForumCategory $forumCategory, int $size): Collection;
}
