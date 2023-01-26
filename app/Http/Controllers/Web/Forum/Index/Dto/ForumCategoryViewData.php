<?php

namespace App\Http\Controllers\Web\Forum\Index\Dto;

use App\Http\Controllers\Web\Forum\Index\ValueObject\ForumTopicViewData;

class ForumCategoryViewData
{
    private string $title;
    private string $description;
    private string $icon;
    private int    $topicsCounter;
    private int    $messagesCounter;
    /** @var ForumTopicViewData[] */
    private array  $lastForumTopics = [];
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

    public function getMessagesCounter(): int
    {
        return $this->messagesCounter;
    }

    public function setMessagesCounter(int $messagesCounter): self
    {
        $this->messagesCounter = $messagesCounter;

        return $this;
    }

    /**
     * @return ForumTopicViewData[]
     */
    public function getLastForumTopics(): array
    {
        return $this->lastForumTopics;
    }

    /**
     * @param array $lastForumTopics
     * @return $this
     */
    public function setLastForumTopics(array $lastForumTopics): self
    {
        $this->lastForumTopics = $lastForumTopics;

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
