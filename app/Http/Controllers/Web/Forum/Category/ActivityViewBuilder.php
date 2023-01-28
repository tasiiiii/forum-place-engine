<?php

namespace App\Http\Controllers\Web\Forum\Category;

use App\ForumPlaceEngine\ForumMessage\Repository\ForumMessageRepositoryInterface;
use App\Http\Controllers\Web\Forum\Category\Dto\ActivityViewData;
use App\Models\ForumTopic;

class ActivityViewBuilder
{
    public function __construct(
        private readonly ForumMessageRepositoryInterface $forumMessageRepository
    )
    {}

    public function build(ForumTopic $forumTopic): ?ActivityViewData
    {
        $forumMessage = $this->forumMessageRepository->getLastMessageInTopic($forumTopic);
        if (is_null($forumMessage)) {
            return null;
        }

        return (new ActivityViewData())
            ->setUsername($forumMessage->creator->name)
            ->setAvatar($forumMessage->creator->avatar)
            ->setCreatedAt($forumMessage->created_at->format('d.m.Y H:i:s'));
    }
}
