<?php

namespace Jacobgardiner\Paginatedresource\Traits;

trait PaginatedResource
{
    public function paginationDetails()
    {
        $lastPage = $this->lastPage();
        return [
            'total'          => $this->total(),
            'count'          => $this->count(),
            'per_page'       => $this->perPage(),
            'current_page'   => $this->currentPage(),
            'total_pages'    => $lastPage,
            'next_page_url'  => $this->nextPageUrl(),
            'prev_page_url'  => $this->previousPageUrl(),
            'first_page_url' => $this->url(1),
            'last_page_url'  => $this->url($lastPage),
            'path'           => $this->path(),
            'from'           => $this->firstItem(),
            'to'             => $this->lastItem(),
        ];
    }
}
