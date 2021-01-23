<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageThreadResource;
use App\Services\Threads\ListThreadService;

class ChatController extends Controller
{
    public function __invoke(ListThreadService $listThreadService)
    {
        logs()->info('2');
        $threads = MessageThreadResource::collection($listThreadService());

        return inertia('Chat/Index', compact('threads'));
    }
}
