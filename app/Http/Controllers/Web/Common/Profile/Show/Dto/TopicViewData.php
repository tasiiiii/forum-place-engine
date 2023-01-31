<?php

namespace App\Http\Controllers\Web\Common\Profile\Show\Dto;

class TopicViewData
{
    private string $creatorName;
    private string $creatorAvatar;
    private string $shortContent;
    private int    $topicMessagesCounter;
    private int    $shareCounter;
    private string $createdAt;
    /** @var TopicReactionData[] */
    private array  $topicReactions = [];

    public function getCreatorName(): string
    {
        return $this->creatorName;
    }

    public function setCreatorName(string $creatorName): self
    {
        $this->creatorName = $creatorName;

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

    public function getShortContent(): string
    {
        return $this->shortContent;
    }

    public function setShortContent(string $shortContent): self
    {
        $this->shortContent = $shortContent;

        return $this;
    }

    public function getTopicMessagesCounter(): int
    {
        return $this->topicMessagesCounter;
    }

    public function setTopicMessagesCounter(int $topicMessagesCounter): self
    {
        $this->topicMessagesCounter = $topicMessagesCounter;

        return $this;
    }

    public function getShareCounter(): int
    {
        return $this->shareCounter;
    }

    public function setShareCounter(int $shareCounter): self
    {
        $this->shareCounter = $shareCounter;

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

    public function getTopicReactions(): array
    {
        return $this->topicReactions;
    }

    public function setTopicReactions(array $topicReactions): self
    {
        $this->topicReactions = $topicReactions;

        return $this;
    }
}
