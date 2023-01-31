<?php

namespace App\Http\Controllers\Web\Common\Profile\Show\Dto;

class TopicReactionData
{
    private string $reactionName;
    private string $reactionPath;
    private array  $users = [];

    public function getReactionName(): string
    {
        return $this->reactionName;
    }

    public function setReactionName(string $reactionName): self
    {
        $this->reactionName = $reactionName;

        return $this;
    }

    public function getReactionPath(): string
    {
        return $this->reactionPath;
    }

    public function setReactionPath(string $reactionPath): self
    {
        $this->reactionPath = $reactionPath;

        return $this;
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function addUserName(string $userName): self
    {
        $this->users[] = $userName;

        return $this;
    }
}
