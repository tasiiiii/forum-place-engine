<?php

namespace App\ForumPlaceEngine\ForumTopic\Contract;

interface ForumTopicRemoveReactionDataInterface
{
    public function getForumTopicId(): int;
    public function getUserId(): int;
}
