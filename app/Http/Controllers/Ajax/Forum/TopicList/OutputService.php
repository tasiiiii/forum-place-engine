<?php

namespace App\Http\Controllers\Ajax\Forum\TopicList;

use App\Models\ForumTopic;

class OutputService
{
    public function build(ForumTopic $forumTopic): array
    {
        return [];
    }
}
