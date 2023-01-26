<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $content
 * @property int    $creator_id
 * @property int    $status
 */
class ForumMessage extends Model
{
    use SoftDeletes;
}
