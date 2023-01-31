<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int    $id
 * @property string $reaction
 * @property int    $forum_topic_id
 * @property int    $user_id
 * @property User   $user
 */
class ForumTopicReaction extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
