<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessageThreadController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\UserController;
use App\Http\Resources\FavoriteResource;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', ChatController::class);

    Route::get('messages/{thread}', [MessageController::class, 'index']);

    // Messages Routes
    Route::resource('messages', MessageController::class)->except([
        'index',
    ]);

    //Route::get('threads/{user}', [MessageThreadController::class, 'index']);
    Route::get('threads/{thread}/messages', [MessageThreadController::class, 'messages']);

    Route::get('/thread/{id}/participants', [MessageThreadController::class, 'participants']);

    Route::delete('/participants/{thread_id}',[ParticipantController::class,'destroy']);

    // User Routes
    Route::resource('user', UserController::class);

    // Favorite Routees
    Route::resource('favorite', FavoriteController::class);

    //MessageThread Route
    Route::resource('thread', MessageThreadController::class);



});

//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// User Routes

// User Routes
