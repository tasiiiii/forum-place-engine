<?php

namespace App\Http\Controllers\Web\Forum\Index\ValueObject;

class ForumTopicViewData
{
    public function __construct(
        private readonly string $title,
        private readonly string $link
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getLink(): string
    {
        return $this->link;
    }
}
