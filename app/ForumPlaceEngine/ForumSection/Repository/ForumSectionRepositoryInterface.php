<?php

namespace App\ForumPlaceEngine\ForumSection\Repository;

use Illuminate\Database\Eloquent\Collection;

interface ForumSectionRepositoryInterface
{
    public function getAll(): Collection;
}
