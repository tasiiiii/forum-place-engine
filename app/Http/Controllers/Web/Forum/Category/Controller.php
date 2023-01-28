<?php

namespace App\Http\Controllers\Web\Forum\Category;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

class Controller extends BaseController
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository,
        private readonly ForumTopicViewBuilder         $forumTopicViewBuilder
    )
    {}

    public function run(string $alias): View
    {
        $forumTopics = $this->forumTopicRepository->getPinnedForForumCategory($alias);

        $forumTopicPinnedViewData = [];
        foreach ($forumTopics as $forumTopic) {
            $forumTopicPinnedViewData[] = $this->forumTopicViewBuilder->build($forumTopic);
        }

        return view('forum.category.category', [
            'forumTopicPinnedViewData' => $forumTopicPinnedViewData,
            'alias'                    => $alias,
        ]);
    }
}
