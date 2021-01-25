<?php

namespace App\Http\Controllers;

use App\Http\Resources\ThreadResource;
use App\Models\Thread;
use App\Services\Threads\CreateThreadService;
use Illuminate\Http\Request;

class MessageThreadController extends Controller
{
    public function index()
    {
        return new ThreadResource(
            Thread::with('participants', 'messages')->get()
        );
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
