<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParticipantResource;
use App\Repositories\MessageRepository;
use App\Repositories\ParticipantRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    private ParticipantRepository $participantRepository;

    private MessageRepository $messageRepository;

    public function __construct(ParticipantRepository $participantRepository, MessageRepository $messageRepository)
    {
        $this->participantRepository = $participantRepository;
        $this->messageRepository = $messageRepository;
    }

    public function index()
    {

    }

    public function store()
    {

    }

    public function show($thread_id, $user_id)
    {


    }

    public function edit($id)
    {

    }


    public function update()
    {

    }


    public function destroy($thread_id)
    {
        $this->participantRepository
            ->where('user_id', '=', Auth::user()->getKey())
            ->where('thread_id', '=', $thread_id)
            ->first()
            ->delete();

        return redirect()->back();
    }
}
