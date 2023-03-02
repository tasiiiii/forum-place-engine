<?php

namespace App\Http\Controllers\Web\Forum\Category;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\Web\Forum\Category\Dto\ForumTopicViewData;
use App\Models\ForumTopic;

class ForumTopicViewBuilder
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository,
        private readonly ActivityViewBuilder           $activityViewBuilder
    )
    {}

    public function build(ForumTopic $forumTopic): ForumTopicViewData
    {
        return (new ForumTopicViewData())
            ->setId($forumTopic->id)
            ->setTitle($forumTopic->title)
            ->setCreator($forumTopic->creator->name)
            ->setCreatorAvatar($forumTopic->creator->avatar)
            ->setMessagesCounter($this->forumTopicRepository->countMessagesInTopic($forumTopic))
            ->setActivityViewData($this->activityViewBuilder->build($forumTopic))
            ->setCreatedAt($forumTopic->created_at->format('d.m.Y'));
    }
}
