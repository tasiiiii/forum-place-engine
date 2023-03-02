<?php

namespace App\Http\Controllers\Web\Forum\Topic\Show\Dto;

use App\Http\Controllers\Web\Forum\Topic\Show\ValueObject\UserViewData;

class ForumTopicViewData
{
    private string       $title;
    private string       $content;
    private UserViewData $creator;
    private int          $reactionCounter;
    private int          $sharedCounter;
    private string       $createdAt;
    /** @var ForumMessageViewData[] */
    private array        $forumMessages;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

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

    public function getReactionCounter(): int
    {
        return $this->reactionCounter;
    }

    public function setReactionCounter(int $reactionCounter): self
    {
        $this->reactionCounter = $reactionCounter;

        return $this;
    }

    public function getSharedCounter(): int
    {
        return $this->sharedCounter;
    }

    public function setSharedCounter(int $sharedCounter): self
    {
        $this->sharedCounter = $sharedCounter;

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

    /**
     * @return ForumMessageViewData[]
     */
    public function getForumMessages(): array
    {
        return $this->forumMessages;
    }

    /**
     * @param ForumMessageViewData[] $forumMessages
     * @return $this
     */
    public function setForumMessages(array $forumMessages): self
    {
        $this->forumMessages = $forumMessages;

        return $this;
    }
}
