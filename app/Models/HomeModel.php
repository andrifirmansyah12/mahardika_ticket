<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    protected $table = 'users';
    public function detailData($id)
    {
        return DB::table('users')->where('id', $id)->first();
    }
}
