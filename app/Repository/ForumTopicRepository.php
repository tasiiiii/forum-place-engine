<?php

namespace App\Repository;

use App\Models\ForumTopic;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ForumTopicRepository
{
    public function getWithPagination(int $size): LengthAwarePaginator
    {
        return ForumTopic::query()->paginate($size);
    }
}
