<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunModel;

class AkunController extends Controller
{   
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
        $this->middleware('auth');
    }

    public function index(){
        $data = [
            'users' => $this->AkunModel->allData(),
        ];
        return view('admin.akun.v_akun', $data);
    }

    public function tambah(){
        return view('admin.akun.v_tambah_akun');
    }

    public function edit(){
        return view('admin.akun.v_edit_akun');
    }
}
