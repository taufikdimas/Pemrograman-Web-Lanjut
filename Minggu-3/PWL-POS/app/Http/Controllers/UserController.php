<?php
namespace App\Http\Controllers;

use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        // //tambah data user model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama'     => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 5,
        // ];
        // UserModel::insert($data); //tambah data ke tabel

        // $data = ['nama' => 'Pelanggan Pertama'];
        // UserModel::where('username', 'customer-1')->update($data);

        //akses user model
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
