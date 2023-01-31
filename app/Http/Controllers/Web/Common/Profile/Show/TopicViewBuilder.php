<?php

namespace App\Http\Controllers\Web\Common\Profile\Show;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\Web\Common\Profile\Show\Dto\TopicViewData;
use App\Models\ForumTopic;

class TopicViewBuilder
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository,
        private readonly TopicReactionViewBuilder      $topicReactionViewBuilder
    )
    {}

    public function build(ForumTopic $forumTopic): TopicViewData
    {
        return (new TopicViewData())
            ->setCreatorName($forumTopic->creator->name)
            ->setCreatorAvatar($forumTopic->creator->avatar)
            ->setShortContent($forumTopic->content)
            ->setTopicMessagesCounter($this->forumTopicRepository->countMessagesInTopic($forumTopic))
            ->setShareCounter(0)
            ->setCreatedAt($forumTopic->created_at->format('d.m.Y H:i:s'))
            ->setTopicReactions($this->topicReactionViewBuilder->build($forumTopic));
    }
}
