<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'level_id' => 'required',
            'username' => 'required|unique:m_user',
            'nama'     => 'required',
            'password' => 'required|min:6|confirmed',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => false,
                'message' => 'Validation Error',
                'errors'  => $validator->errors(),
            ], 422);
        }
        //create user
        $user = UserModel::create([
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => bcrypt($request->password),
            'image'    => $request->hasFile('image') ?
            (function () use ($request) {
                $file     = $request->file('image');
                $fileName = $file->hashName();
                $file->move(public_path('img/user'), $fileName);
                return 'img/user/' . $fileName;
            })() : null,
        ]);

        //return response JSON user when user is created
        if ($user) {
            return response()->json([
                'status'  => true,
                'message' => 'User created successfully',
                'data'    => $user,
            ], 201);
        } else {
            //return response JSON user when user is not created
            return response()->json([
                'status'  => false,
                'message' => 'User creation failed',
            ], 409);
        }
    }
}
