<?php

namespace App\ForumPlaceEngine\ForumTopic\Repository;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ForumTopicRepositoryInterface
{
    public function getWithPagination(int $size): LengthAwarePaginator;
}
