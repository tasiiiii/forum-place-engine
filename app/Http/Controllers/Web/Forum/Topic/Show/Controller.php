<?php

namespace App\Http\Controllers\Web\Forum\Topic\Show;

use App\ForumPlaceEngine\ForumTopic\Enum\ForumTopicStatusEnum;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\BaseController;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Controller extends BaseController
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository,
        private readonly ForumTopicViewBuilder         $forumTopicViewBuilder
    ) {
    }

    /**
     * @throws AuthorizationException
     */
    public function run(int $id): View
    {
        $forumTopic = $this->forumTopicRepository->getById($id);
        if (is_null($forumTopic)) {
            throw new NotFoundHttpException();
        }

        if (Auth::user()) {
            $this->authorize('show', $forumTopic);
        } else {
            if (!in_array($forumTopic->status, ForumTopicStatusEnum::getStatusesWithOpenVisibility())) {
                throw new NotFoundHttpException();
            }
        }

        return view('forum.topic.show', [
            'forumTopicViewData' => $this->forumTopicViewBuilder->build($forumTopic),
        ]);
    }
}
