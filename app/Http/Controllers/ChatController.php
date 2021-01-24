<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteResource;
use App\Http\Resources\ThreadResource;
use App\Models\Favorite;
use App\Repositories\FavoriteRepository;
use App\Services\Threads\ListThreadService;
use Auth;
use function MongoDB\BSON\toJSON;

class ChatController extends Controller
{
    private FavoriteRepository $repository;

    public function __construct(FavoriteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(ListThreadService $listThreadService)
    {
        debugbar()->log('Calling Chat Controller');
        $threads = ThreadResource::collection($listThreadService());

        $favorites = FavoriteResource::collection($this->repository->with(['user', 'favorited'])->get());

        debugbar()->log($threads);

        return inertia('Chat/Index', compact('threads', 'favorites'));
    }
}
