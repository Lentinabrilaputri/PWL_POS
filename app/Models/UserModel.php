<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    // protected $table = 'm_user';
    // protected $primaryKey = 'user_id';

    // protected $fillable = ['level_id', 'username', 'nama', 'password'];
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = ['level_id', 'username', 'nama'];
}

