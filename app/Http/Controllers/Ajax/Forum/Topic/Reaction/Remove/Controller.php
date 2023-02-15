<?php

namespace App\Http\Controllers\Ajax\Forum\Topic\Reaction\Remove;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\ForumTopic\Action\ForumTopicRemoveReactionAction;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Web\Forum\Topic\Reaction\Remove\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class Controller extends BaseController
{
    public function __construct(
        private readonly ForumTopicRemoveReactionAction $forumTopicRemoveReactionAction
    )
    {}

    public function run(Request $request): JsonResponse
    {
        $data = $request->getData();

        try {
            $this->forumTopicRemoveReactionAction->run($data);
        } catch (ApplicationException $e) {
            return new JsonResponse([
                'error' => $e->getMessage(),
            ], ResponseAlias::HTTP_FORBIDDEN);
        }

        return new JsonResponse([
            'message' => 'Reaction removed',
        ]);
    }
}
