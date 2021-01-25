<?php

namespace App\Services\Threads;

use App\Repositories\ThreadRepository;

class ListThreadService
{
    /**
     * @var ThreadRepository
     */
    private ThreadRepository $messageThreadRepository;

    public function __construct(ThreadRepository $messageThreadRepository)
    {
        $this->messageThreadRepository = $messageThreadRepository;
    }

    public function __invoke()
    {
        debugbar()->log('Calling ListThreadSerice');

        return $this->messageThreadRepository->all();
    }
}
