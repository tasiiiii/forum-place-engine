<?php

namespace App\ForumPlaceEngine\ForumTopic\Contract;

interface ForumTopicRemoveReactionDataInterface extends ForumTopicIdentificationDataInterface
{
    public function getUserId(): int;
}
