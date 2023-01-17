<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string      $title
 * @property string      $content
 * @property int         $creator_id
 * @property int         $status
 * @property int         $views
 * @property int         $section_id
 * @property int         $forum_section_id
 * @property string|null $ban_reason
 */
class ForumTopic extends Model
{
    use SoftDeletes;
}
