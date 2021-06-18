<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePageModel;

class HomePageController extends Controller
{   
    public function __construct()
    {
        $this->HomePageModel = new HomePageModel(); 
    }

    public function index()
    {   
        $data = [
            'film' => $this->HomePageModel->paginate(3),
        ];
        return view('v_home_page', $data);
    }

    public function detail($id)
    {
        if (!$this->HomePageModel->detail($id)) {
            abort(404);
        }
        $data = [
            'film' => $this->HomePageModel->detail($id),
        ];
        return view('v_detail_page', $data);
    }
}
