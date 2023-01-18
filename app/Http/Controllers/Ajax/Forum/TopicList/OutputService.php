<?php

namespace App\Http\Controllers\Ajax\Forum\TopicList;

use App\Models\ForumTopic;
use JetBrains\PhpStorm\ArrayShape;

class OutputService
{
    #[ArrayShape(['title' => "string", 'creator' => "string", 'created' => "string"])]
    public function build(ForumTopic $forumTopic): array
    {
        return [
            'title'   => $forumTopic->title,
            'creator' => $forumTopic->creator->name,
            'created' => $forumTopic->created_at->format('d.m.Y'),
        ];
    }
}
