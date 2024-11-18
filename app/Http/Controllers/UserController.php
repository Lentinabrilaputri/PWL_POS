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

            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345'),
            'level_id' => 2
            // 'nama' => 'Pelanggan Pertama',
        ];
        UserModel::create($data);
        // UserModel::insert($data);
        // UserModel::where('username', 'customer-1')->update($data);

        // Mengambil semua data user dan menampilkan ke view
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
