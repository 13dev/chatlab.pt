<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteResource;
use App\Repositories\FavoriteRepository;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    private FavoriteRepository $repository;

    public function __construct(FavoriteRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = $this->repository->all();

        return FavoriteResource::collection($data);
    }

    /**
     * @param Request $request
     * @param UserValidator $validator
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request, UserValidator $validator)
    {
        $data = $request->only('user_id', 'favorited_id');

        $response = $this->repository->create($data);

        return FavoriteResource::collection($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($id)
    {
        $data = $this->repository->get($id);

        return FavoriteResource::collection($id);
    }

    public function edit($id)
    {
        //return view('edit', ['id' => $id]);
    }

    /**
     * @param Request $request
     * @param $id
     * @param UserValidator $validator
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id, UserValidator $validator)
    {
        $data = $request->only('user_id', 'favorited_id');

        $response = $this->repository->update($data, $id);

        return FavoriteResource::collection($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function destroy($id)
    {
        $data = $this->repository->get($id);

        return FavoriteResource::collection($data);
    }
}
