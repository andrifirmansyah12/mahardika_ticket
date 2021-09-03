<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TicketPageModel extends Model
{
    protected $table = 'film';
    protected $blog = 'blog';

    public function allData()
    {
        return DB::table('film')->get();
    }

    public function blogs()
    {
        return DB::table('blog')->get();
    }

    public function detail($id)
    {
        return DB::table('film')->where('id', $id)->first();
    }
}
