<?php

namespace App\Repository;

use App\ForumPlaceEngine\ForumCategory\ForumCategoryRepositoryInterface;
use App\Models\ForumCategory;

class ForumCategoryRepository implements ForumCategoryRepositoryInterface
{
    public function getByAlias(string $alias): ?ForumCategory
    {
        return ForumCategory::query()
            ->where('alias', '=', $alias)
            ->first();
    }
}
