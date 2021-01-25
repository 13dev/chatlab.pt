<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function MongoDB\BSON\toJSON;
use Prettus\Validator\Contracts\ValidatorInterface;

class UserController extends Controller
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $data = $this->repository->all();
        Session::put('response', UserResource::collection($data));
        return true;
    }

    /**
     * @param Request $request
     * @param UserValidator $validator
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request, UserValidator $validator)
    {
        $data = $request->only('name', 'email', 'password');

        $validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);

        $response = $this->repository->create($data);

        return UserResource::collection($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($id)
    {
        $data = $this->repository->get($id);

        return UserResource::collection($data);
    }

    public function edit($id)
    {
        //return view('edit', ['id' => $id]);
    }

    /**
     * @param Request $request
     * @param $id
     * @param UserValidator $validator
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id, UserValidator $validator)
    {
        $data = $request->only('name', 'email', 'password');

        $validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);

        $response = $this->repository->update($data, $id);

        return UserResource::collection($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function destroy($id)
    {
        $response = $this->repository->delete($id);

        return UserResource::collection($response);
    }
}
