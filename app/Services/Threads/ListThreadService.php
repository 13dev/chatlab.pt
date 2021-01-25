<?php

namespace App\Services\Threads;

use App\Repositories\ThreadRepository;
use Illuminate\Support\Facades\Auth;

class ListThreadService
{

    /**
     * @var ThreadRepository
     */
    private ThreadRepository $threadRepository;

    public function __construct(ThreadRepository $threadRepository)
    {
        $this->threadRepository = $threadRepository;
    }

    public function __invoke()
    {
        debugbar()->log('Calling ListThreadSerice');

        return $this->threadRepository->byUser(Auth::user()->getKey());
    }
}
