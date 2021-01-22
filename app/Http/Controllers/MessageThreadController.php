<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageThreadResource;
use App\Models\MessageThread;
use App\Services\CreateThreadService;
use Illuminate\Http\Request;

class MessageThreadController extends Controller
{
    public function index()
    {
        return new MessageThreadResource(
            MessageThread::with('participants', 'messages')->get()
        );
    }

    /**
     * @param Request $request
     * @param CreateThreadService $createThreadService
     * @return MessageThreadResource
     */
    public function store(Request $request, CreateThreadService $createThreadService)
    {
        $thread = $createThreadService(
            $request->get('participants'),
            $request->get('title') ?: null
        );

        return new MessageThreadResource($thread);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
