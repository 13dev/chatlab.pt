<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = User::all();

        //return view('', ['users' => $users]);
    }

    public function updateUser(Request $request)
    {
        $userId = User::find($request->get('id'));

        if ($userId == null) {
            // se nao der resultado
        }

        $userId->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'avatar' => $request->get('avatar'),
        ]);

        //return
    }
}
