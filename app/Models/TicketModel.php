<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TicketModel extends Model
{
    protected $table = 'film';
    public function allData()
    {
        return DB::select('select * from film ORDER BY id DESC');
    }

    public function addData($data)
    {
        return DB::table('film')->insert($data);
    }

    public function detailData($id)
    {
        return DB::table('film')->where('id', $id)->first();
    }

    public function editData($id, $data)
    {
        return DB::table('film')
            ->where('id', $id)
            ->update($data);
    }

    public function deleteData($id)
    {
        return DB::table('film')
            ->where('id', $id)
            ->delete();
    }
}