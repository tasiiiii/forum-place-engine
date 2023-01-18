<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string        $title
 * @property string        $content
 * @property int           $creator_id
 * @property User          $creator
 * @property int           $status
 * @property int           $views
 * @property int           $forum_category_id
 * @property ForumCategory $forumCategory
 * @property string|null   $ban_reason
 * @property DateTime      $created_at
 */
class ForumTopic extends Model
{
    use SoftDeletes;

    public function forumCategory(): BelongsTo
    {
        return $this->belongsTo(ForumCategory::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
