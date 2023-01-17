<?php

namespace App\Repository;

use App\ForumPlaceEngine\ForumSection\Repository\ForumSectionRepositoryInterface;
use App\Models\ForumSection;
use Illuminate\Database\Eloquent\Collection;

class ForumSectionRepository implements ForumSectionRepositoryInterface
{
    public function getAll(): Collection
    {
        return ForumSection::query()->get();
    }
}
