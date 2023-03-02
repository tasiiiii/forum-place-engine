<?php

namespace App\Http\Controllers\Web\Forum\Topic\Show;

use App\ForumPlaceEngine\ForumMessage\Repository\ForumMessageRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicReactionRepositoryInterface;
use App\Http\Controllers\Web\Forum\Topic\Show\Dto\ForumTopicViewData;
use App\Http\Controllers\Web\Forum\Topic\Show\ValueObject\UserViewData;
use App\Models\ForumTopic;

class ForumTopicViewBuilder
{
    public function __construct(
        private readonly ForumTopicReactionRepositoryInterface $forumTopicReactionRepository,
        private readonly ForumMessageRepositoryInterface       $forumMessageRepository,
        private readonly ForumMessageViewBuilder               $forumMessageViewBuilder
    )
    {}

    public function build(ForumTopic $forumTopic): ForumTopicViewData
    {
        $creator = new UserViewData($forumTopic->creator->name, $forumTopic->creator->avatar);

        $forumMessages     = $this->forumMessageRepository->getWithPagination($forumTopic);
        $forumMessagesData = [];
        foreach ($forumMessages as $forumMessage) {
            $forumMessagesData[] = $this->forumMessageViewBuilder->build($forumMessage);
        }

        return (new ForumTopicViewData())
            ->setTitle($forumTopic->title)
            ->setContent($forumTopic->content)
            ->setCreator($creator)
            ->setReactionCounter($this->forumTopicReactionRepository->countByForumTopic($forumTopic))
            ->setSharedCounter(0)
            ->setForumMessages($forumMessagesData)
            ->setCreatedAt($forumTopic->created_at->format('d.m.Y'));
    }
}
