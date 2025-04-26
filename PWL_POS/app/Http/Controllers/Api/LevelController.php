<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        return LevelModel::all();
    }

    public function store(Request $request)
    {
        $level = LevelModel::create($request->all());
        return response()->json($level, 201);
    }

    public function show(LevelModel $level)
    {
        return LevelModel::find($level);
    }

    public function update(Request $request, LevelModel $level)
    {
        $level->update($request->all());
        return LevelModel::find($level);
    }
    public function destroy(LevelModel $level)
    {

        $users = UserModel::where('level_id', $level->id)->get();
        foreach ($users as $user) {
            $user->delete();
        }

        // Delete the level itself
        $level->delete();

        return response()->json([
            'message' => 'Level and associated users deleted successfully',
        ], 200);
    }
}
