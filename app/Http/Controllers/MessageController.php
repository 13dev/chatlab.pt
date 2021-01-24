<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use App\Http\Resources\MessageResource;
use App\Repositories\MessageRepository;
use App\Validators\MessageValidator;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MessageController extends Controller
{
    private MessageRepository $repository;

    public function __construct(MessageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all Messages.
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = $this->repository->all();

        return MessageResource::collection($data);
    }

    /**
     * @param Request $request
     * @param MessageValidator $validator
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request, MessageValidator $validator)
    {
        $data = $request->only('thread_id', 'sender_id', 'body');

        $validator->with($data)->passesOrFail();

        $response = $this->repository->create($data);

        broadcast(new SendMessage($data['thread_id'], $data['body']));

        return redirect()
            ->back()
            ->with('response', new MessageResource($response));
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
