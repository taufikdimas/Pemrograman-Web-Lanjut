<?php
namespace App\Http\Controllers;

use App\Models\UserModel;

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
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama'     => 'Manager 2',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // JS4: Pratikum 2.1
        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // JS4: Praktikum 2.2
        // $user = UserModel::findOrFail(1);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();

        // JS4: Praktimum 2.3
        $user = UserModel::where('level_id', 2)->count();
        // dd($user);

        //akses user model
        // $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
