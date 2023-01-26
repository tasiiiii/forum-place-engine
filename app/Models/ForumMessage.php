<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $content
 * @property int    $status
 * @property int    $creator_id
 * @property int    $forum_topic_id
 */
class ForumMessage extends Model
{
    use SoftDeletes;

    public function forumTopic(): BelongsTo
    {
        return $this->belongsTo(ForumTopic::class);
    }
}
