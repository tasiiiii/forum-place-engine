<?php

namespace App\ForumPlaceEngine\ForumTopic\Repository;

use App\Models\ForumCategory;
use App\Models\ForumTopic;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface ForumTopicRepositoryInterface
{
    public function getById(int $id): ?ForumTopic;
    public function getWithPagination(ForumCategory $forumCategory, int $size): LengthAwarePaginator;
    public function getPinnedForForumCategory(string $forumCategoryAlias): Collection;
    public function countTopicsInForumCategory(ForumCategory $forumCategory): int;
    public function getLastByForumCategory(ForumCategory $forumCategory, int $size): Collection;
    public function countMessagesInTopic(ForumTopic $forumTopic): int;
    public function getByCreator(User $creator): Collection;
}
