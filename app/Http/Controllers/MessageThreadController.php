<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Http\Resources\ThreadResource;
use App\Http\Resources\UserResource;
use App\Models\Thread;
use App\Models\User;
use App\Repositories\MessageRepository;
use App\Repositories\ParticipantRepository;
use App\Repositories\ThreadRepository;
use App\Services\Threads\CreateThreadService;
use Illuminate\Http\Request;

class MessageThreadController extends Controller
{
    /**
     * @var ThreadRepository
     */
    private ThreadRepository $threadRepository;
    /**
     * @var MessageRepository
     */
    private MessageRepository $messageRepository;

    private ParticipantRepository $participantRepository;


    public function __construct(ThreadRepository $threadRepository, MessageRepository $messageRepository, ParticipantRepository $participantRepository)
    {
        $this->threadRepository = $threadRepository;
        $this->messageRepository = $messageRepository;
        $this->participantRepository = $participantRepository;
    }

    public function index(User $user)
    {
        $data = $this->threadRepository->byUser($user->getKey());

        return redirect()
            ->back()
            ->with('response', ThreadResource::collection($data));
    }

    public function messages(Thread $thread)
    {
        $data = $this->messageRepository->with('participant.user')->where('thread_id', $thread->getKey())->get();
        debugbar()->debug($data);

        return redirect()
            ->back()
            ->with('response', MessageResource::collection($data));
    }

    public function participants($id){

        $all = $this->participantRepository->with('user')->where('thread_id', '=', $id)->get()->pluck('user');

        return redirect()->back()->with('response', UserResource::collection($all));

    }

    public function store(Request $request, CreateThreadService $createThreadService)
    {
        $thread = $createThreadService(
            $request->get('participants'),
            $request->get('description') ?: ' ',
            $request->get('title') ?: ' '

        );

        return redirect()
            ->back()
            ->with('response', new ThreadResource($thread));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
