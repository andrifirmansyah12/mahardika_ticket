<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketPageModel;

class TicketPageController extends Controller
{

    public function __construct()
    {
        $this->TicketPageModel = new TicketPageModel(); 
    }
    
    public function ticket()
    {   
        $data = [
            'film' => $this->TicketPageModel->paginate(3),
        ];
        return view('main.v_ticket', $data);
    }

    public function detail($id)
    {
        if (!$this->TicketPageModel->detail($id)) {
            abort(404);
        }
        $data = [
            'film' => $this->TicketPageModel->detail($id),
        ];
        return view('v_detail_page', $data);
    }
}
