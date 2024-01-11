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
        $request->validate([
            'title' => 'required|min:3|max:54',
            'album' => 'required|min:3|max:54',
            'artist' => 'required|min:3|max:124',
            'genre' => 'required|min:3|max:54',
        ]);

        Song::create($request->all());

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
        request()->validate([
            'title' => 'required|min:3|max:54',
            'album' => 'required|min:3|max:54',
            'artist' => 'required|min:3|max:124',
            'genre' => 'required|min:3|max:54',
        ]);

        $song->title = $request->title;
        $song->album = $request->album;
        $song->artist = $request->artist;
        $song->genre = $request->genre;
        $song->save();

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
