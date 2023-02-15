<?php

namespace App\Http\Controllers\Ajax\Forum\Topic\Reaction\Remove\Dto;

use App\ForumPlaceEngine\ForumTopic\Contract\ForumTopicRemoveReactionDataInterface;

class ForumTopicRemoveReactionData implements ForumTopicRemoveReactionDataInterface
{
    private int $forumTopicId;
    private int $userId;

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
    }

    public function setForumTopicId(int $forumTopicId): self
    {
        $this->forumTopicId = $forumTopicId;

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
