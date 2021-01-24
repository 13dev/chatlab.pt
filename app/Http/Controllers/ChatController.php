<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageThreadResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\Threads\ListThreadService;
use Auth;

class ChatController extends Controller
{
    public function __invoke(ListThreadService $listThreadService)
    {
        debugbar()->log('Calling Chat Controller');
        $threads = MessageThreadResource::collection($listThreadService());

        debugbar()->log($threads);

        return inertia('Chat/Index', compact('threads'));
    }
}
