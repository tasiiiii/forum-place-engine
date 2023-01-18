<?php

namespace App\Http\Controllers\Web\Forum\Category\Dto;

class ForumTopicViewData
{
    private string $title;
    private string $creator;
    private string $createdAt;
    private string $creatorAvatar;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCreator(): string
    {
        return $this->creator;
    }

    public function setCreator(string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatorAvatar(): string
    {
        return $this->creatorAvatar;
    }

    public function setCreatorAvatar(string $creatorAvatar): self
    {
        $this->creatorAvatar = $creatorAvatar;

        return $this;
    }
}
