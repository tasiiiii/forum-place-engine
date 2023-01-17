<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int             $id
 * @property string          $title
 * @property ForumCategory[] $forumCategories
 */
class ForumSection extends Model
{
    public function forumCategories(): HasMany
    {
        return $this->hasMany(ForumCategory::class);
    }
}
