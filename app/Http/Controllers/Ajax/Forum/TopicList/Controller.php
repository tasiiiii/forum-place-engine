<?php

namespace App\Http\Controllers\Ajax\Forum\TopicList;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    private int $paginationDefaultPageSize;

    public function __construct(
        private readonly ForumTopicRepositoryInterface $forumTopicRepository,
        private readonly OutputService                 $outputService
    )
    {
        $this->paginationDefaultPageSize = App::configPath('app.pagination_default_page_size');
    }

    public function run(): JsonResponse
    {
        $forumTopics = $this->forumTopicRepository->getWithPagination($this->paginationDefaultPageSize);

        $data = [];
        foreach ($forumTopics as $forumTopic) {
            $data[] = $this->outputService->build($forumTopic);
        }

        return Response::json([
            'data' => $data,
        ]);
    }
}
