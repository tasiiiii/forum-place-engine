<?php

namespace App\Http\Controllers\Ajax\Forum\Topic\Reaction\Create;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\ForumTopic\Action\ForumTopicSetReactionAction;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Ajax\Forum\Topic\Reaction\Create\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class Controller extends BaseController
{
    public function __construct(
        private readonly ForumTopicSetReactionAction $forumTopicSetReactionAction
    )
    {}

    public function run(Request $request): JsonResponse
    {
        try {
            $dto = ($request->getData())
                ->setUserId(Auth::id());

            $this->forumTopicSetReactionAction->run($dto);
        } catch (ApplicationException $e) {
            return new JsonResponse([
                'error' => $e->getMessage(),
            ], ResponseAlias::HTTP_FORBIDDEN);
        }

        return new JsonResponse([
            'data' => [
                'reaction' => $dto->getReactionType(),
            ]
        ]);
    }
}
