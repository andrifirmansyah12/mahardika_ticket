<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AkunModel extends Model
{
    protected $table = 'users';
    public function allData()
    {
        return DB::select('select * from users ORDER BY id DESC');
    }
}
