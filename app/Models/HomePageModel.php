<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class HomePageModel extends Model
{
    protected $table = 'blog';

    public function allData()
    {
        return DB::select('select * from blog ORDER BY id ASC');
    }

    public function detail($id)
    {
        return DB::table('blog')->where('id', $id)->first();
    }
}
