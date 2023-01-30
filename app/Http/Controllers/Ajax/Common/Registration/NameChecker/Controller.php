<?php

namespace App\Http\Controllers\Ajax\Common\Registration\NameChecker;

use App\ForumPlaceEngine\User\Action\NameCheckerAction;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Ajax\Common\Registration\NameChecker\Request;
use Illuminate\Http\JsonResponse;

class Controller extends BaseController
{
    public function __construct(
        private readonly NameCheckerAction $nameCheckerAction
    )
    {}

    public function run(Request $request): JsonResponse
    {
        return new JsonResponse([
            'data' => [
                'exist' => $this->nameCheckerAction->exist($request->getData()),
            ]
        ]);
    }
}
