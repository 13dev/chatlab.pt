<?php

namespace App\Http\Controllers;

use App\Http\Resources\ThreadResource;
use App\Services\Threads\ListThreadService;

class ChatController extends Controller
{
    public function __invoke(ListThreadService $listThreadService)
    {
        debugbar()->log('Calling Chat Controller');
        $threads = ThreadResource::collection($listThreadService());

        debugbar()->log($threads);

        return inertia('Chat/Index', compact('threads'));
    }
}
