<?php

namespace App\ForumPlaceEngine\ForumTopic\Contract;

interface ForumTopicSetReactionDataInterface
{
    public function getForumTopicId(): int;
    public function getReactionType(): string;
    public function getUserId(): int;
}
