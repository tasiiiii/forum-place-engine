<?php

namespace App\Http\Controllers\Web\Forum\Index\Dto;

class ForumCategoryViewData
{
    private string $title;
    private string $description;
    private string $icon;
    private int    $topicsCounter;
    private string $forumCategoryLink;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getTopicsCounter(): int
    {
        return $this->topicsCounter;
    }

    public function setTopicsCounter(int $topicsCounter): self
    {
        $this->topicsCounter = $topicsCounter;

        return $this;
    }

    public function getForumCategoryLink(): string
    {
        return $this->forumCategoryLink;
    }

    public function setForumCategoryLink(string $forumCategoryLink): self
    {
        $this->forumCategoryLink = $forumCategoryLink;

        return $this;
    }
}
