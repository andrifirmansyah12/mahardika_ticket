<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('admin.ticket.v_ticket');
    }

    public function tambah(){
        return view('admin.ticket.v_tambah_ticket');
    }

    public function edit(){
        return view('admin.ticket.v_edit_ticket');
    }
}
