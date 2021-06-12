<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunModel;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
        $this->middleware('auth');
    }

    public function index(){
        $data = [
            'akun' => $this->AkunModel->allData(),
        ];
        return view('layout.profile', $data);
    }
}
