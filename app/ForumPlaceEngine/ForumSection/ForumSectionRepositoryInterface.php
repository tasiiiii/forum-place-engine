<?php

namespace App\ForumPlaceEngine\ForumSection;

use Illuminate\Database\Eloquent\Collection;

interface ForumSectionRepositoryInterface
{
    public function getAll(): Collection;
}
