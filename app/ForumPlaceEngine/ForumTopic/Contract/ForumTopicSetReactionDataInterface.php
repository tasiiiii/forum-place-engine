<?php

namespace App\ForumPlaceEngine\ForumTopic\Contract;

interface ForumTopicSetReactionDataInterface extends ForumTopicIdentificationDataInterface
{
    public function getReactionType(): string;
    public function getUserId(): int;
}
