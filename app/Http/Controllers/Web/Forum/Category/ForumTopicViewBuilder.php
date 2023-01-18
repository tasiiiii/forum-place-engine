<?php

namespace App\Http\Controllers\Web\Forum\Category;

use App\Http\Controllers\Web\Forum\Category\Dto\ForumTopicViewData;
use App\Models\ForumTopic;

class ForumTopicViewBuilder
{
    public function build(ForumTopic $forumTopic): ForumTopicViewData
    {
        return (new ForumTopicViewData())
            ->setTitle($forumTopic->title)
            ->setCreator($forumTopic->creator->name)
            ->setCreatorAvatar($forumTopic->creator->avatar)
            ->setCreatedAt($forumTopic->created_at->format('d.m.Y'));
    }
}
