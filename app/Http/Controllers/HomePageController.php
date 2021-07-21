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

    public function ticket()
    {   
        $data = [
            'film' => $this->HomePageModel->paginate(3),
        ];
        return view('main.v_ticket', $data);
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

    public function index()
    {   
        return view('v_home_page');
    }

    public function aboutUs()
    {   
        return view('main.v_about_us');
    }

    public function contact()
    {   
        return view('main.v_contact');
    }

    public function store()
    {   
        return view('main.v_store');
    }

    public function forum()
    {   
        return view('main.v_forum');
    }

    public function latihan()
    {   
        return view('main.v_latihan');
    }
    
}
