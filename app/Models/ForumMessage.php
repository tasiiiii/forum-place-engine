<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int      $id
 * @property string   $content
 * @property int      $status
 * @property int      $creator_id
 * @property User     $creator
 * @property int      $forum_topic_id
 * @property DateTime $created_at
 */
class ForumMessage extends Model
{
    use SoftDeletes;

    public function forumTopic(): BelongsTo
    {
        return $this->belongsTo(ForumTopic::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
