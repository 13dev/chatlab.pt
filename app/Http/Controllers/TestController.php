<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageThreadParticipantResource;
use App\Http\Resources\MessageThreadResource;
use App\Models\MessageThread;
use App\Models\MessageThreadParticipant;
use Inertia\Inertia;

class TestController extends Controller
{
    public function index()
    {
        $user = new MessageThreadParticipantResource(MessageThreadParticipant::find(21)->with('thread', 'user')->get());

        return view('test', ['user' => $user]);
    }

    public function test()
    {
        $threads = MessageThreadResource::collection(
            MessageThread::with('participants', 'messages')->get()
        )->toJson();

        $user = '2ere';

        return Inertia::render(
            'Chat/Index',
            compact('threads', 'user')
        );
    }
}
