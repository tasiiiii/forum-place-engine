<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\ForumPlaceEngine\ForumSection\ForumSectionRepositoryInterface;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Controller extends BaseController
{
    public function __construct(
        private readonly ForumSectionRepositoryInterface $forumSectionRepository,
        private readonly ForumSectionViewBuilder         $forumSectionViewBuilder
    )
    {}

    public function run(): Factory|View|Application
    {
        $forumSections = $this->forumSectionRepository->getAll();

        $forumSectionViewData = [];
        foreach ($forumSections as $forumSection) {
            $forumSectionViewData[] = $this->forumSectionViewBuilder->build($forumSection);
        }

        return view('forum.index', [
            'forumSectionViewData' => $forumSectionViewData,
        ]);
    }
}
