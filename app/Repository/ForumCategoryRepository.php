<?php

namespace App\Repository;

use App\Models\ForumCategory;
use Illuminate\Database\Eloquent\Collection;

class ForumCategoryRepository
{
    public function getAll(): Collection
    {
        return ForumCategory::query()->get();
    }
}
