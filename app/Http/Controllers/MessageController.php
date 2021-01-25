<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use App\Http\Resources\MessageResource;
use App\Models\Message;
use App\Models\Participant;
use App\Models\Thread;
use App\Repositories\MessageRepository;
use App\Validators\MessageValidator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private MessageRepository $repository;

    public function __construct(MessageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Thread $thread
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Thread $thread)
    {

//        return redirect()->back()->with('response', ThreadResource::collection($data));
    }

    /**
     * @param Request $request
     * @param MessageValidator $validator
     * @throws \Prettus\Validator\Exceptions\Valid<atorException
     */
    public function store(Request $request, MessageValidator $validator)
    {
        $data = $request->only('thread_id', 'user_id', 'body');

        $validator->with($data)->passesOrFail();

        // TODO: Change to find only, if doesnt exists return error.
        $data['participant_id'] = Participant::firstOrCreate(['user_id' => $data['user_id']], [
            'user_id' => $data['user_id'],
            'thread_id' => $data['thread_id'],
        ])->getKey();

        /** @var Model $response */
        $response = $this->repository->create($data);

        $message = Message::with('participant.user')
            ->where('id', $response->getKey())
            ->firstOrFail();

        broadcast(new SendMessage($message))->toOthers();

        return redirect()
            ->back()
            ->with('response', new MessageResource($message));
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
