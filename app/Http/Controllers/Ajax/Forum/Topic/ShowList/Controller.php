<?php

namespace App\Http\Controllers\Ajax\Forum\Topic\ShowList;

use App\ForumPlaceEngine\ForumCategory\ForumCategoryRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Web\Forum\Category\ForumTopicViewBuilder;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    private int $paginationDefaultPageSize;

    public function __construct(
        private readonly ForumCategoryRepositoryInterface $forumCategoryRepository,
        private readonly ForumTopicRepositoryInterface    $forumTopicRepository,
        private readonly ForumTopicViewBuilder            $forumTopicViewBuilder
    )
    {
        $this->paginationDefaultPageSize = (int) App::configPath('app.pagination_default_page_size');
    }

    public function run(string $alias): JsonResponse
    {
        $forumCategory = $this->forumCategoryRepository->getByAlias($alias);
        if (is_null($forumCategory)) {
            return Response::json([
                'error' => 'Forum category not found',
            ]);
        }

        $forumTopics = $this->forumTopicRepository->getWithPagination($forumCategory, $this->paginationDefaultPageSize);

        $data = [];
        foreach ($forumTopics as $forumTopic) {
            $data[] = $this->forumTopicViewBuilder->build($forumTopic);
        }

        $content = view('forum.category.topic-list', [
            'forumTopics' => $data,
            'isPinned'    => false,
        ]);

        return Response::json([
            'data' => (string) $content,
        ]);
    }
}
