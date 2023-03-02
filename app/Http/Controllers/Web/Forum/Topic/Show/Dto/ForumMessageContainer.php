<?php

namespace App\Http\Controllers\Web\Forum\Topic\Show\Dto;

use App\UI\Pagination\PaginationData;

class ForumMessageContainer
{
    /** @var ForumMessageViewData[] */
    private array          $forumMessages = [];
    private PaginationData $paginationData;

    public function getForumMessages(): array
    {
        return $this->forumMessages;
    }

    public function setForumMessages(array $forumMessages): self
    {
        $this->forumMessages = $forumMessages;

        return $this;
    }

    public function getPaginationData(): PaginationData
    {
        return $this->paginationData;
    }

    public function setPaginationData(PaginationData $paginationData): self
    {
        $this->paginationData = $paginationData;

        return $this;
    }
}
