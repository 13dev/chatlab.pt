<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParticipantResource;
use App\Http\Resources\ThreadResource;
use App\Models\Thread;
use App\Models\Participant;
use Inertia\Inertia;

class TestController extends Controller
{
    public function index()
    {
        $data = Participant::find(21)
            ->with('thread', 'user')
            ->get();

        $user = new ParticipantResource($data);

        return view('test', ['user' => $user]);
    }

    public function test()
    {
        $threads = ThreadResource::collection(
            Thread::all()
        );

        $user = '2ere2';
    }
}
