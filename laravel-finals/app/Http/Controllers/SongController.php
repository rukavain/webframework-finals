<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Song::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Song::create($request->all());

        return response()->json(['info' => 'successfully recorded a song.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return $song;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $song->$request->title;
        $song->$request->album;
        $song->$request->artist;
        $song->$request->genre;
        $song->save();

        return $song;

        return response()->json(['info' => 'successfully updated a song.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return response()->json(['info' => 'successfully deleted a song.']);
    }
}
