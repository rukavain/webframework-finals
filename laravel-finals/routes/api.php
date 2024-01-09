<?php

use App\Http\Controllers\SongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/songs', [SongController::class, 'index']); //returns all songs
Route::post('/songs', [SongController::class, 'store'])->name('create.song'); //store a song
Route::put('songs/{song}', [SongController::class, 'update'])->name('edit.song'); //update/edit a song
Route::delete('/songs/{song}', [SongController::class, 'destroy'])->name('delete.song'); //delete a song
Route::get('/songs/{song}', [SongController::class, 'show'])->name('show.song'); // return a single song
