<?php

namespace App\Services\Threads;

use App\Repositories\MessageThreadRepository;

class ListThreadService
{
    /**
     * @var MessageThreadRepository
     */
    private MessageThreadRepository $messageThreadRepository;

    public function __construct(MessageThreadRepository $messageThreadRepository)
    {
        $this->messageThreadRepository = $messageThreadRepository;
    }

    public function __invoke()
    {
        debugbar()->log('Calling ListThreadSerice');

        return $this->messageThreadRepository->paginate(10);
    }
}
