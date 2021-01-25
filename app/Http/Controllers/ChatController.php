<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteResource;
use App\Http\Resources\ThreadResource;
use App\Http\Resources\UserResource;
use App\Models\Favorite;
use App\Models\User;
use App\Repositories\FavoriteRepository;
use App\Services\Threads\ListThreadService;
use Auth;

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

        $users = UserResource::collection(User::all());
        debugbar()->log($threads);

        return inertia('Chat/Index', compact('threads', 'favorites', 'users'));
    }
}
