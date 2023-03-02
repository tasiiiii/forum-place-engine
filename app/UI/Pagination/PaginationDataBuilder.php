<?php

namespace App\UI\Pagination;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class PaginationDataBuilder
{
    private const PAGE_OFFSET = 3;

    public function build(LengthAwarePaginator $paginator): PaginationData
    {
        $firstPage = new PageData(
            1,
            $paginator->url(1),
            $paginator->currentPage() === 1
        );

        if ($firstPage->getPage() === $paginator->lastPage()) {
            return (new PaginationData())
                ->setFirstPage($firstPage);
        }

        $lastPage = new PageData(
            $paginator->lastPage(),
            $paginator->url($paginator->lastPage()),
            $paginator->lastPage() === $paginator->currentPage()
        );

        $range = [];
        if ($paginator->currentPage() !== $firstPage->getPage()) {
            for ($i = self::PAGE_OFFSET; $i > 0; $i--) {
                if ($paginator->currentPage() - $i <= $firstPage->getPage()) {
                    continue;
                }

                $range[] = new PageData(
                    $paginator->currentPage() - $i,
                    $paginator->url($paginator->currentPage() - $i)
                );
            }
        }

        if (!$firstPage->isCurrent() && !$lastPage->isCurrent()) {
            $range[] = new PageData(
                $paginator->currentPage(),
                $paginator->url($paginator->currentPage()),
                true
            );
        }

        if ($paginator->currentPage() !== $lastPage->getPage()) {
            for ($i = 1; $i <= self::PAGE_OFFSET; $i++) {
                if ($paginator->currentPage() + $i === $lastPage->getPage()) {
                    break;
                }

                $range[] = new PageData(
                    $paginator->currentPage() + $i,
                    $paginator->url($paginator->currentPage() + $i)
                );
            }
        }

        return (new PaginationData())
            ->setFirstPage($firstPage)
            ->setPageRange($range)
            ->setLastPage($lastPage);
    }
}
