<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class HomePageModel extends Model
{
    protected $table = 'film';
    public function allData()
    {
        return DB::table('film')->get();
    }

    public function detail($id)
    {
        return DB::table('film')->where('id', $id)->first();
    }

}
