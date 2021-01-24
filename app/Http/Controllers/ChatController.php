<?php

namespace App\Http\Controllers;

use App\Http\Resources\ThreadResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\Threads\ListThreadService;
use Auth;

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
