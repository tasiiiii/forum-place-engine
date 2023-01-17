<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\ForumPlaceEngine\ForumSection\Repository\ForumSectionRepositoryInterface;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

class Controller extends BaseController
{
    public function __construct(
        private readonly ForumSectionRepositoryInterface $forumSectionRepository,
        private readonly ForumSectionViewBuilder         $forumSectionViewBuilder
    )
    {}

    public function run(): View
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
