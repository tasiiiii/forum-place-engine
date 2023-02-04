<?php

namespace App\Http\Controllers\Ajax\Forum\Topic\Reaction\Create\Dto;

use App\ForumPlaceEngine\ForumTopic\Contract\ForumTopicSetReactionDataInterface;

class ForumTopicSetReactionData implements ForumTopicSetReactionDataInterface
{
    private int    $forumTopicId;
    private string $reactionType;
    private int    $userId;

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
    }

    public function setForumTopicId(int $forumTopicId): self
    {
        $this->forumTopicId = $forumTopicId;

        return $this;
    }

    public function getReactionType(): string
    {
        return $this->reactionType;
    }

    public function setReactionType(string $reactionType): self
    {
        $this->reactionType = $reactionType;

        return $this;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
