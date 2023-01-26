<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\ForumPlaceEngine\ForumMessage\Repository\ForumMessageRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\Web\Forum\Index\Dto\ForumCategoryViewData;
use App\Http\Controllers\Web\Forum\Index\ValueObject\ForumTopicViewData;
use App\Models\ForumCategory;
use App\Models\ForumTopic;

class ForumCategoryViewBuilder
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface   $forumTopicRepository,
        private readonly ForumMessageRepositoryInterface $forumMessageRepository
    ) {
    }

    public function build(ForumCategory $forumCategory): ForumCategoryViewData
    {
        $lastTopics    = $this->forumTopicRepository->getLastByForumCategory($forumCategory, 3);
        $lastTopicsDto = [];

        /** @var ForumTopic $lastTopic */
        foreach ($lastTopics as $lastTopic) {
            $lastTopicsDto[] = new ForumTopicViewData($lastTopic->title,  route('forum_topic_show', ['id' => $lastTopic->id]));
        }

        return (new ForumCategoryViewData())
            ->setTitle($forumCategory->title)
            ->setDescription($forumCategory->description)
            ->setIcon($forumCategory->icon)
            ->setTopicsCounter($this->forumTopicRepository->countTopicsInForumCategory($forumCategory))
            ->setMessagesCounter($this->forumMessageRepository->countMessagesInForumCategory($forumCategory))
            ->setLastForumTopics($lastTopicsDto)
            ->setForumCategoryLink(
                route('forum_category', ['alias' => $forumCategory->alias])
            );
    }
}
