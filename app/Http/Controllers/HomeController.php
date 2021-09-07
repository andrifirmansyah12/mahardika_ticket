<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $akun = DB::table('users')->count();
        $ticket = DB::table('film')->count();
        $blog = DB::table('blog')->count();
        return view('v_home', compact(
            'akun',
            'ticket',
            'blog'
        ));
    }
    
}
