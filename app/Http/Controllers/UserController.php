<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // tambah data user dengan Eloquent Model
        $data = [
            // 'username' => 'manager_dua',
            // 'nama' => 'Manager 2',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 2

            // 'username' => 'manager_tiga',
            // 'nama' => 'Manager 3',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 2
            // 'nama' => 'Pelanggan Pertama',
        ];
        // UserModel::create($data);
        // UserModel::insert($data);
        // UserModel::where('username', 'customer-1')->update($data);

        // Mengambil semua data user dan menampilkan ke view
        // $user = UserModel::all();
        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // $user = UserModel::findOr(1, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // $user = UserModel::findOrFail(1);
        $user = UserModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data' => $user]);
    }
}
