<?php
namespace App\Http\Controllers;

class UserController extends Controller
{
    public function showProfile($id, $name)
    {
        return view('user.profile', compact('id', 'name'));
    }
}
