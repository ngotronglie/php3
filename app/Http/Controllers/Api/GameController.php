<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = game::all();
        return response()->json($game, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'game_title' => $request->game_title,
            'cover_art' => $request->cover_art,
            'developer' => $request->developer,
            'release_year' => $request->release_year,
        ];
        $game = game::create($data);
        return response()->json($game, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = game::find($id);
        return response()->json($game, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = game::find($id);
        $game->update($request->all());
        return response()->json($game, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = game::find($id);
        $game->delete();
        return response()->json(null, 204);
    }
}
