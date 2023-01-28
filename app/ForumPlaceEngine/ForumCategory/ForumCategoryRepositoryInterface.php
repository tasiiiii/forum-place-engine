<?php

namespace App\ForumPlaceEngine\ForumCategory;

use App\Models\ForumCategory;

interface ForumCategoryRepositoryInterface
{
    public function getByAlias(string $alias): ?ForumCategory;
}
