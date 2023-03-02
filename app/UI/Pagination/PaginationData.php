<?php

namespace App\UI\Pagination;

class PaginationData
{
    private PageData  $firstPage;
    /** @var PageData[] */
    private array     $pageRange = [];
    private ?PageData $lastPage  = null;

    public function getFirstPage(): PageData
    {
        return $this->firstPage;
    }

    public function setFirstPage(PageData $firstPage): self
    {
        $this->firstPage = $firstPage;

        return $this;
    }

    public function getPageRange(): array
    {
        return $this->pageRange;
    }

    public function setPageRange(array $pageRange): self
    {
        $this->pageRange = $pageRange;

        return $this;
    }

    public function getLastPage(): ?PageData
    {
        return $this->lastPage;
    }

    public function setLastPage(?PageData $lastPage): self
    {
        $this->lastPage = $lastPage;

        return $this;
    }
}
