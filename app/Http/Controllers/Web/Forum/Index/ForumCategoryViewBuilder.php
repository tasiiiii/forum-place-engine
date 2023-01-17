<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\Http\Controllers\Web\Forum\Index\Dto\ForumCategoryViewData;
use App\Models\ForumCategory;

class ForumCategoryViewBuilder
{
    public function build(ForumCategory $forumCategory): ForumCategoryViewData
    {
        return (new ForumCategoryViewData())
            ->setTitle($forumCategory->title)
            ->setDescription($forumCategory->description)
            ->setIcon($forumCategory->icon)
            ->setForumCategoryLink(
                route('forum_category', ['alias' => $forumCategory->alias])
            );
    }
}
