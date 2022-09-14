<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectionController extends Controller
{
    public function createProjection(Request $request){
        DB::table('movie_room')->insert([
            'movie_id' => $request->movie_id,
            'room_id' => $request->room_id,
            'projection' => $request->projection
        ]);
        return "Movie projection added successfully!";
    }

    public function getProjection(){
        $projections = DB::table('movie_room')->get();
        return response()->json($projections);
    }
}
