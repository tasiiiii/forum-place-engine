<?php

namespace App\Http\Controllers\Web\Forum\Topic\Show;

use App\Http\Controllers\Web\Forum\Topic\Show\Dto\ForumMessageViewData;
use App\Http\Controllers\Web\Forum\Topic\Show\ValueObject\UserViewData;
use App\Models\ForumMessage;

class ForumMessageViewBuilder
{
    public function build(ForumMessage $forumMessage): ForumMessageViewData
    {
        $creator = new UserViewData($forumMessage->creator->name, $forumMessage->creator->avatar);

        return (new ForumMessageViewData())
            ->setContent($forumMessage->content)
            ->setCreator($creator)
            ->setCreatedAt($forumMessage->created_at->format('d.m.Y'));
    }
}
