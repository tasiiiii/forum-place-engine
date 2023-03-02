<?php

namespace App\Http\Controllers\Web\Forum\Topic\Show;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\BaseController;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Controller extends BaseController
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository,
        private readonly ForumTopicViewBuilder         $forumTopicViewBuilder
    ) {
    }

    public function run(int $id): View
    {
        $forumTopic = $this->forumTopicRepository->getById($id);
        if (is_null($forumTopic)) {
            throw new NotFoundHttpException();
        }

        return view('forum.topic.show', [
            'forumTopicViewData' => $this->forumTopicViewBuilder->build($forumTopic),
        ]);
    }
}
