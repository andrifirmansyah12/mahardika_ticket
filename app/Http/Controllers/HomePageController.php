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
            'blog' => $this->HomePageModel->paginate(7),
        ];
        return view('v_home_page', $data);
    }

    public function detail($id)
    {   
        if (!$this->HomePageModel->detail($id)) {
            abort(404);
        }
        $data = [
            'blog' => $this->HomePageModel->detail($id),
        ];
        return view('main.v_forum', $data);
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

    public function latihan()
    {   
        return view('main.v_latihan');
    }
    
}
