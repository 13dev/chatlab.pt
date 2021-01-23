<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Resources\MessageThreadResource;
use App\Models\MessageThread;
use Illuminate\Support\Facades\Request as RequestAlias;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (RequestAlias $request) {

    $threads = MessageThreadResource::collection(
        MessageThread::with('participants', 'messages')->get()
    )->toJson();

    $user = \App\Models\User::first();

    return inertia(
        'Chat/Index',
        compact('threads', 'user')
    );
})->middleware('web');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// User Routes

Route::resource('messages', MessageController::class);

Route::resource('user', UserController::class);

// User Routes

// User Routes
