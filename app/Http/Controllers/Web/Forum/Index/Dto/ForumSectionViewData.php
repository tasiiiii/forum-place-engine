<?php

namespace App\Http\Controllers\Web\Forum\Index\Dto;

class ForumSectionViewData
{
    private string $title;
    /** @var ForumCategoryViewData[] */
    private array  $categories = [];

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function addCategory(ForumCategoryViewData $forumCategoryViewData): self
    {
        $this->categories[] = $forumCategoryViewData;

        return $this;
    }
}
