<?php

namespace App\Http\Controllers\Ajax\Forum\TopicList;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    private const PAGE_SIZE = 15;

    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository,
        private readonly OutputService                 $outputService
    )
    {}

    public function run(): JsonResponse
    {
        $forumTopics = $this->forumTopicRepository->getWithPagination(self::PAGE_SIZE);

        $data = [];
        foreach ($forumTopics as $forumTopic) {
            $data[] = $this->outputService->build($forumTopic);
        }

        return Response::json([
            'data' => $data,
        ]);
    }
}
