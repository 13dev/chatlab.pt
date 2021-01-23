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
        $data = MessageThreadParticipant::find(21)
            ->with('thread', 'user')
            ->get();

        $user = new MessageThreadParticipantResource($data);

        return view('test', ['user' => $user]);
    }

    public function test()
    {
        $threads = MessageThreadResource::collection(
            MessageThread::all()
        );

        $user = '2ere2';


    }
}
