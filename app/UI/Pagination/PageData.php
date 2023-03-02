<?php

namespace App\UI\Pagination;

class PageData
{
    public function __construct(
        private readonly int    $page,
        private readonly string $url,
        private readonly bool   $current = false
    )
    {}

    public function getPage(): int
    {
        return $this->page;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function isCurrent(): bool
    {
        return $this->current;
    }
}
