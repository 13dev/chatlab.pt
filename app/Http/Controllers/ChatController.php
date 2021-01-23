<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageThreadResource;
use App\Services\Threads\ListThreadService;

class ChatController extends Controller
{
    public function __invoke(ListThreadService $listThreadService)
    {
        debugbar()->log('Calling Chat Controller');

        $threads = MessageThreadResource::collection($listThreadService());

        return inertia('Chat/Index', compact('threads'));
    }
}
