<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\UploadImageService;
use App\Validators\UserValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use function MongoDB\BSON\toJSON;
use Prettus\Validator\Contracts\ValidatorInterface;

class UserController extends Controller
{
    private UserRepository $repository;
    /**
     * @var UserValidator
     */
    private UserValidator $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
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
     * @param UploadImageService $imageService
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, string $id, UploadImageService $uploadImageService)
    {
        $data = $request->all();

        $this->validator
            ->with($data)
            ->passesOrFail(ValidatorInterface::RULE_UPDATE);

        if($request->hasFile('avatar')) {
            // upload
            $data['avatar'] = $uploadImageService(
                $request->avatar,
                storage_path('app/public')
            );
            dump($data);

        }

        $data['password'] = bcrypt($request->get('password'));

        unset($data['password_confirmation']);

        $response = $this->repository->update($data, $id);

        return redirect()
            ->to('/')
            ->with('response', new UserResource($response));
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
