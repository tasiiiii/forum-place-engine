<?php

namespace App\ForumPlaceEngine\ForumTopic\Repository;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface ForumTopicRepositoryInterface
{
    public function getWithPagination(int $size): LengthAwarePaginator;
    public function getPinnedForForumCategory(string $forumCategoryAlias): Collection;
}
