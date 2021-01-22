<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageThreadParticipantResource;
use App\Http\Resources\MessageThreadResource;
use App\Models\MessageThread;
use App\Models\MessageThreadParticipant;

class TestController extends Controller
{
    public function index()
    {
        $user = new MessageThreadParticipantResource(MessageThreadParticipant::find(21)->with('thread', 'user')->get());

        return view('test', ['user' => $user]);
    }
}
