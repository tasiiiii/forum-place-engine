<?php

namespace App\Http\Controllers\Web\Common\Profile\Show\Dto;

class ProfileViewData
{
    private string $name;
    private string $avatar;
    private string $background;
    private int    $topicsCounter;
    private int    $friendsCounter;
    private int    $visitsCounter;
    private string $biography;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAvatar(): string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getBackground(): string
    {
        return $this->background;
    }

    public function setBackground(string $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function getTopicsCounter(): int
    {
        return $this->topicsCounter;
    }

    public function setTopicsCounter(int $topicsCounter): self
    {
        $this->topicsCounter = $topicsCounter;

        return $this;
    }

    public function getFriendsCounter(): int
    {
        return $this->friendsCounter;
    }

    public function setFriendsCounter(int $friendsCounter): self
    {
        $this->friendsCounter = $friendsCounter;

        return $this;
    }

    public function getVisitsCounter(): int
    {
        return $this->visitsCounter;
    }

    public function setVisitsCounter(int $visitsCounter): self
    {
        $this->visitsCounter = $visitsCounter;

        return $this;
    }

    public function getBiography(): string
    {
        return $this->biography;
    }

    public function setBiography(string $biography): self
    {
        $this->biography = $biography;

        return $this;
    }
}
