<?php

namespace App\Http\Controllers;

use App\Models\MessageThread;
use App\Repositories\MessageThreadParticipantRepository;
use App\Repositories\MessageThreadRepository;
use App\Services\CreateThreadService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageThreadController extends Controller
{
    /**
     * @param Request $request
     * @param CreateThreadService $createThreadService
     * @return JsonResponse
     */
    public function store(Request $request, CreateThreadService $createThreadService)
    {
        $thread = $createThreadService(
            $request->get('participants'),
            $request->get('title') ?: null
        );

        return new JsonResponse($thread);
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
