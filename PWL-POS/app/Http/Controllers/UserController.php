<?php
namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //JS3
        // $data = [
        //     'username' => 'customer-1',
        //     'nama'     => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 5,
        // ];
        // UserModel::insert($data); //tambah data ke tabel

        // $data = ['nama' => 'Pelanggan Pertama'];
        // UserModel::where('username', 'customer-1')->update($data);

        //JS4: Pratikum 1
        $data = [
            'level_id' => 2,
            'username' => 'manager_dua',
            'nama'     => 'Manager 2',
            'password' => Hash::make('12345'),
        ];
        UserModel::create($data);

        //akses user model
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
