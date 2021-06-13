<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPageModel;

class DetailPageController extends Controller
{
    public function __construct()
    {
        $this->DetailPageModel = new DetailPageModel(); 
    }

    public function index()
    {   
        $data = [
            'film' => $this->DetailPageModel->allData(),
        ];

        return view('v_detail_page', $data);
    }
}
