<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\Web\Forum\Index\Dto\ForumCategoryViewData;
use App\Models\ForumCategory;

class ForumCategoryViewBuilder
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository
    ) {
    }

    public function build(ForumCategory $forumCategory): ForumCategoryViewData
    {
        return (new ForumCategoryViewData())
            ->setTitle($forumCategory->title)
            ->setDescription($forumCategory->description)
            ->setIcon($forumCategory->icon)
            ->setTopicsCounter($this->forumTopicRepository->countTopicsInForumCategory($forumCategory))
            ->setForumCategoryLink(
                route('forum_category', ['alias' => $forumCategory->alias])
            );
    }
}
