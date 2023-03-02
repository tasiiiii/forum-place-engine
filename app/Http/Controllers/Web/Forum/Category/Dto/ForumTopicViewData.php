<?php

namespace App\Http\Controllers\Web\Forum\Category\Dto;

class ForumTopicViewData
{
    private int               $id;
    private string            $title;
    private string            $creator;
    private string            $createdAt;
    private string            $creatorAvatar;
    private int               $messagesCounter;
    private ?ActivityViewData $activityViewData;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

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

    public function getMessagesCounter(): int
    {
        return $this->messagesCounter;
    }

    public function setMessagesCounter(int $messagesCounter): self
    {
        $this->messagesCounter = $messagesCounter;

        return $this;
    }

    public function getActivityViewData(): ?ActivityViewData
    {
        return $this->activityViewData;
    }

    public function setActivityViewData(?ActivityViewData $activityViewData): self
    {
        $this->activityViewData = $activityViewData;

        return $this;
    }
}
