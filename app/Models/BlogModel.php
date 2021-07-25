<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    protected $table = 'blog';
    public function allData()
    {
        return DB::select('select * from blog ORDER BY id DESC');
    }

    public function addData($data)
    {
        return DB::table('blog')->insert($data);
    }

    public function detailData($id)
    {
        return DB::table('blog')->where('id', $id)->first();
    }

    public function editData($id, $data)
    {
        return DB::table('blog')
            ->where('id', $id)
            ->update($data);
    }

    public function deleteData($id)
    {
        return DB::table('blog')
            ->where('id', $id)
            ->delete();
    }
}
