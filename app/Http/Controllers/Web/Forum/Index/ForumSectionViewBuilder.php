<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\Http\Controllers\Web\Forum\Index\Dto\ForumSectionViewData;
use App\Models\ForumSection;

class ForumSectionViewBuilder
{
    public function __construct(
        private readonly ForumCategoryViewBuilder $forumCategoryViewBuilder
    )
    {}

    public function build(ForumSection $forumSection): ForumSectionViewData
    {
        $forumSectionViewData = (new ForumSectionViewData())
            ->setTitle($forumSection->title);

        foreach ($forumSection->forumCategories as $forumCategory) {
            $forumSectionViewData->addCategory(
                $this->forumCategoryViewBuilder->build($forumCategory)
            );
        }

        return $forumSectionViewData;
    }
}
