<?php

namespace App\Http\Controllers\Web\Forum\Index;

use App\Http\Controllers\Web\Forum\Index\Dto\ViewData;
use App\Models\ForumCategory;

class OutputService
{
    public function build(ForumCategory $forumCategory): ViewData
    {
        return (new ViewData())
            ->setTitle($forumCategory->title)
            ->setDescription($forumCategory->description)
            ->setIcon($forumCategory->icon)
            ->setForumCategoryLink(
                route('forum_category', ['alias' => $forumCategory->alias])
            );
    }
}
