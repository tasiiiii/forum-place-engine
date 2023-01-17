<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\Http\Controllers\BaseController;
use App\Repository\ForumCategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Controller extends BaseController
{
    public function __construct(
        private readonly ForumCategoryRepository $forumCategoryRepository,
        private readonly OutputService           $outputService
    )
    {}

    public function run(): Factory|View|Application
    {
        $forumCategories = $this->forumCategoryRepository->getAll();

        $viewDataList = [];
        foreach ($forumCategories as $forumCategory) {
            $viewDataList[] = $this->outputService->build($forumCategory);
        }

        return view('forum.index', [
            'viewDataList' => $viewDataList,
        ]);
    }
}
