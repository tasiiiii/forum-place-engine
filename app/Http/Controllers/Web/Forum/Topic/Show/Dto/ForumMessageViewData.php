<?php

namespace App\Http\Controllers\Web\Forum\Topic\Show\Dto;

use App\Http\Controllers\Web\Forum\Topic\Show\ValueObject\UserViewData;

class ForumMessageViewData
{
    private string       $content;
    private UserViewData $creator;
    private string       $createdAt;

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreator(): UserViewData
    {
        return $this->creator;
    }

    public function setCreator(UserViewData $creator): self
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
}
